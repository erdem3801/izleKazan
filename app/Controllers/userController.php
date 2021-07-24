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
        if ($this->request->getMethod() == "post") {

            $isUser = $this->subModel->where($this->request->getPost())->first();
            if ($isUser) {
                session()->set('user', $isUser['ID']);
                return redirect()->to(base_url());
            }
            session()->setFlashdata('error', 'Kullanıcı adı veya şifre yanlış');
        }
        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View");
        # code...
    }
    public function logout()
    {

        session()->destroy();
        return view("{$this->viewFolder}/singinView");
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
                'IBAN' => '0',
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
