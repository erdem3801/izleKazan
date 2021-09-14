<?php

namespace App\Models;

use CodeIgniter\Model;

class videosModel extends Model
{
    protected $table      = 'videoTable';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'userId',
        'link',
        'videoId',
        'group',
        'advertsType',
        'buttonText',
        'redirectUrl',
        'trafic',
        'duration',
        'viewPerPerson',
        'viewPerHour',
        'language',
        'isStart',
        'payment'
    ];

    protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';
    
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
