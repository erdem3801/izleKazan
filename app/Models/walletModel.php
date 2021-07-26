<?php

namespace App\Models;

use CodeIgniter\Model;

class walletModel extends Model
{
    protected $table      = 'walletTable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'IBAN',
        'savedMoney',
        'earnedMoney'
    ];
 

    protected $validationRules    = [ 
        'IBAN'     => 'max_length[34]|min_length[5]', 
    ];
    protected $validationMessages = [
        'IBAN' => [
            'max_length' => 'IBAN max 34 karekter olmalı',
            'min_length' => 'IBAN min 5 karekter olmalı',
        ]
    ];
    protected $skipValidation     = false;
}