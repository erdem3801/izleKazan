<?php

namespace App\Models;

use CodeIgniter\Model;

class popUpModel extends Model
{
    protected $table      = 'popUpTable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'popUpUrl',
        'popUpUrlVisible',
        'popUpHitMoney',
        'popUpMoney',
        'popUpCaptcha',
        'popUpTime'


    ];
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
