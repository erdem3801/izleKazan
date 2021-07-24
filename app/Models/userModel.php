<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table      = 'usertable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'userName', 
        'firstName',
        'lastName',
        'eMail', 
        'phone', 
        'location', 
        'birthDay', 
        'password',  
        'isActive'
    ];
 

    protected $validationRules    = [ 
        'eMail'        => 'required|valid_email|is_unique[usertable.eMail]',
        'password'     => 'required|min_length[5]', 
    ];
    protected $validationMessages = [
        'eMail'        => [
            'is_unique' => 'Email adresi daha önce alındı',
            'required' => 'Email alanını boş bırakmayın',
            'valid_email' => 'Email format doğru değil'
        ],
        'password' => [
            'required' => 'Şifre alanını Boş bırakmayın',
            'min_length' => 'Şifre 5 karakterden fazla olmalı'
        ]
       

    ];
    protected $skipValidation     = false;
}