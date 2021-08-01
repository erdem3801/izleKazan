<?php

namespace App\Models;

use CodeIgniter\Model;

class multiSizeModel extends Model
{
    protected $table      = 'multiSizeTable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'multiSizeImg',
        'multiSizeTittle',
        'multiSizeUrl',
        'multiSizeText',
        'multiSizePos',
        'multiSizeHit',
        'multiSizeHitMoney',
        'multiSizeMoney'
        

    ];
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
