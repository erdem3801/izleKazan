<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Message;

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

            $this->subModel->insert($queryData);

            return $this->response->setJSON([
                'id' => $this->subModel->getInsertID(),
                'email' => $data['eMail']
            ]);
        }

        $view = __FUNCTION__;
        return view("{$this->viewFolder}/{$view}View");
        # code...
    }
    public function emailAuth()
    {
        $email = \Config\Services::email();

        $config['protocol'] = 'smtp';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['wordWrap'] = true;
        $config['newline'] = "\r\n";
        
        $email->initialize($config);

        $email->setFrom('burkaerdem@gmail.com', 'burkay erdem');
        $email->setTo("illegal_3801@hotmail.com");

        $email->setSubject('deneme');
        $email->setMessage("deneme");

        if ($email->send()) {
            echo $this->request->getGet('email') . 'adresine mesaj gönderildi mailinizi kontrol edin';
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
            
        }
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
