<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Libraries\userToken;
class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        $token  = new userToken();
       
        $isAuth = $token->checkJWT($token); 
        if(!$isAuth)
            return redirect()->to(base_url('user/singin'));
           // echo 'token expided';
      
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}