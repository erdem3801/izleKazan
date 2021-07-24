<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Message;
use App\Models\userModel;
use CodeIgniter\Cookie\Cookie;
use DateTime;
use DateTimeZone;


class userController extends BaseController
{
    private $viewFolder;
    private $subModel;


    public function __construct()
    {
        $this->viewFolder = "userView";
        $this->subModel  = new userModel();
    }
    public function singin()
    {
        // id 457124912073-mat8ckgptrmri9ndk0ah4qvqmrre6gs9.apps.googleusercontent.com
        // secret RZyey3Wu0x_9K-cVoN6u7nYv
        $viewData = [];
        #region googleAuth
         require_once APPPATH."Libraries/vendor/autoload.php";
         $google_client = new \Google_Client();
         $google_client->setClientId('457124912073-mat8ckgptrmri9ndk0ah4qvqmrre6gs9.apps.googleusercontent.com');
         $google_client->setClientSecret('RZyey3Wu0x_9K-cVoN6u7nYv');
         $google_client->setRedirectUri(base_url('user/singin'));
         $google_client->addScope('email');
         $google_client->addScope('profile');

         if($this->request->getVar('code')){
             $token = $google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
             if(!isset($token['error'])){
                 
                 $google_client->setAccessToken($token['access_token']);
                 session()->set('access_token',$token['access_token']);

                 $google_service = new \Google_Service_Oauth2($google_client);
                 $googleData = $google_service->userinfo->get();
          
                 $isUser = $this->subModel->select('googleId')
                                          ->where('googleId',$googleData['id'])
                                          ->first();
           
                if($isUser){
                
                    return redirect()->to(base_url());
                }
                else{
                    $queryData = [
                        'googleId' => $googleData['id'],
                        'userName' => $googleData['givenName'] . $googleData['familyName'] . rand(0, 100),
                        'firstName' => $googleData['givenName'],
                        'lastName' => $googleData['familyName'],
                        'eMail'     => 'google-'.$googleData['email'],
                        'password'  => $googleData['id'],
                    ];
                    $this->subModel->insert($queryData);
                    return redirect()->to(base_url());
                }
                  

             }
         }
         #endregion;

         if(!session()->get('access_token')){
             $viewData['googleHref'] = $google_client->createAuthUrl();
         }
         


        if ($this->request->getMethod() == "post") {

            $isUser = $this->subModel->where($this->request->getPost())->first();
            if ($isUser) {
                session()->set('access_token', $isUser['ID']);
                return redirect()->to(base_url());
            }
            session()->setFlashdata('error', 'Kullanıcı adı veya şifre yanlış');
        }
        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View",$viewData);
        # code...
    }
    public function logout()
    {

        session()->destroy();
        return redirect()->to(base_url('user/singin'));
        # code...
    }
    public function singup()
    {
        parse_str($this->request->getPost('data'), $data);

        if ($this->request->getMethod() == "post") {
            $queryData = [
                'userName' => $data['firstName'] . $data['lastName'] . rand(0, 100),
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'eMail'     => $data['eMail'],
                'password'  => $data['password'],
            ];

            if ($this->subModel->insert($queryData) !== false) {

                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => [
                        'id' => $this->subModel->getInsertID(),
                        'email' => $data['eMail']
                    ]
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'data' => $this->subModel->errors()
                ]);
            }
        }

        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View");
        # code...
    }
    public function emailAuth()
    {
        $email = \Config\Services::email();

        $email->setTo($this->request->getGet('email'));

        $email->setSubject('izleKazan');
        $email->setMessage(base_url('user/Auth?token=' . $this->request->getGet('id')));
        session()->setFlashData('email',$this->request->getGet('email'));
        session()->setFlashData('id',$this->request->getGet('id'));
        // if ($email->send()) {
        return redirect()->to(base_url('user/mailSended'));
        // } else {
        //     $data = $email->printDebugger(['headers']);
        //     print_r($data); 

        // }
        # code...
    }
    public function mailSended()
    {
        helper('cookie');
        $viewData = [];
        $email = session()->getFlashData('email');
        $id = session()->getFlashData('id');
        if(!$id && !$email)
            return redirect()->to(base_url('user/singin'));
        $viewData['email'] = $email;
        $viewData['id'] = $id;
        

        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
    public function profile()
    {
        $id = session()->get('user');
        if ($this->request->getMethod() == "post") {

            $this->subModel->update($id, $this->request->getPost());
        }
        $viewData = [];
        $viewData['userData'] = $this->subModel->find($id);
        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
}
