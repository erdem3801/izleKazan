<?php

namespace App\Controllers;

use App\Libraries\userToken;
use Google\Service\Oauth2;

class userController extends BaseController
{
    private $viewFolder;
    private $subModel;

    public function __construct()
    {
        $this->viewFolder = "userView";
        $this->subModel  = model('userModel');
    }
    public function singin()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

        #region controller special code 

        // id 457124912073-mat8ckgptrmri9ndk0ah4qvqmrre6gs9.apps.googleusercontent.com
        // secret RZyey3Wu0x_9K-cVoN6u7nYv
        $userToken = new userToken();

        #region googleAuth
        $google_client = new \Google_Client();
        $google_client->setClientId('457124912073-mat8ckgptrmri9ndk0ah4qvqmrre6gs9.apps.googleusercontent.com');
        $google_client->setClientSecret('RZyey3Wu0x_9K-cVoN6u7nYv');
        $google_client->setRedirectUri(base_url("user/singin"));
        $google_client->addScope('email');
        $google_client->addScope('profile');

        if ($this->request->getVar('code')) {
            $token = $google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
            if (!isset($token['error'])) {

                $google_client->setAccessToken($token['access_token']);
                session()->set('access_token', $token['access_token']);
                $google_service = new Oauth2($google_client);
                $googleData = $google_service->userinfo->get();

                $isUser = $this->subModel->where('googleId', $googleData['id'])
                    ->first();

                if ($isUser) {
                    $userToken->setJWT($isUser);
                    return redirect()->to(base_url($locale));
                } else {
                    $queryData = [
                        'googleId' => $googleData['id'] == null ? '' : $googleData['id'],
                        'userName' => $googleData['givenName'] == null ? '' : $googleData['givenName'] . $googleData['familyName'] ?? $googleData['familyName'] . rand(0, 100),
                        'firstName' => $googleData['givenName'] == null ? '' : $googleData['givenName'],
                        'lastName' => $googleData['familyName'] == null ? '' : $googleData['familyName'],
                        'eMail'     => 'google-' . $googleData['email'],
                        'password'  => $googleData['id'] == null ? '' : $googleData['id'],
                    ];
                    $this->subModel->insert($queryData);
                    $queryData['ID'] = $this->subModel->getInsertID();
                    $userToken->setJWT($queryData);

                    return redirect()->to(base_url($locale));
                }
            }
        }
        #endregion;

        #region facebookAuth

        #endregion;

        #region emailAuth
        if (!session()->get('access_token')) {
            $viewData['googleHref'] = $google_client->createAuthUrl();
        }



        if ($this->request->getMethod() == "post") {

            $isUser = $this->subModel->where($this->request->getPost())->first();
            if ($isUser) {
                $userToken->setJWT($isUser);
                return redirect()->to(base_url($locale));
            }
            session()->setFlashdata('error', 'Kullanıcı adı veya şifre yanlış');
        }
        #endregion;

        #endregion;

        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
    public function logout()
    {
        $locale = $this->request->getLocale();

        session()->destroy();
        return redirect()->to(base_url("user/singin"));
        # code...
    }
    public function singup()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

        #region controller special code 

        parse_str($this->request->getPost('data'), $data);

        if ($this->request->getMethod() == "post") {
            $queryData = [
                'userName' => $data['firstName'] . $data['lastName'] . rand(0, 100),
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'googleId'     => $data['eMail'],
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
        #endregion;

        return view("{$this->viewFolder}/{$view}View",$viewData);
        # code...
    }
    public function emailAuth()
    {
        $locale = $this->request->getLocale();

        $email = \Config\Services::email();
        $email->setTo($this->request->getGet('email'));
        $email->setSubject('izleKazan');
        $email->setMessage(base_url("{$locale}user/Auth?token={$this->request->getGet('id')}"));
        session()->setFlashData('email', $this->request->getGet('email'));
        session()->setFlashData('id', $this->request->getGet('id'));
        if ($email->send()) {
            return redirect()->to(base_url("user/mailSended"));
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        # code...
    }
    public function mailSended()
    {
        $locale = $this->request->getLocale();

        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

        #region controller special code 
        helper('cookie');
        $email = session()->getFlashData('email');
        $id = session()->getFlashData('id');
        if (!$id && !$email)
            return redirect()->to(base_url("{$locale}user/singin"));
        $viewData['email'] = $email;
        $viewData['id'] = $id;
        #endregion;


        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
    public function profile()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

        #region controller special code 
        $userData = session()->get('userData');

        if ($this->request->getMethod() == "post") {

            $connectionResult =  $this->subModel->update($userData['ID'], $this->request->getPost());
            if ($connectionResult) {
                $userData = $this->subModel->find($userData['ID']);
                session()->set('userData',$userData);
                //TODO: güncelleme başarlı durumunda uyarı verilecek
            }
            else{
                //TODO: göncelleme başarısız durumunda uyrarı mesajı verilecek
            }
        }
        $viewData['userData'] = $userData;
        #endregion;
       
   

        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
}
