<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
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
        'IBAN', 
    ];
 

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}