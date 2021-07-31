<?php

namespace App\Models;

use CodeIgniter\Model;

class bannerModel extends Model
{
    protected $table      = 'bannerTable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'bannerUrl',
        'bannerPos',
        'bannerHit',
        'bannerHitMoney',
        'bannerMoney',
        'bannerCaptcha'


    ];
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
