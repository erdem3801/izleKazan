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
        'userId',
        'walletMoney',
        'Money'
    ];
 

	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

    protected $validationRules    = [ 
     
    ];
    protected $validationMessages = [
      
    ];
    protected $skipValidation     = false;
}