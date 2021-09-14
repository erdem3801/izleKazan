<?php

namespace App\Database\Seeds;

use App\Models\userModel;
use CodeIgniter\Database\Seeder;

class DefaultSettingSeed extends Seeder
{
	public function run()
	{
		
		$UserModel = model('userModel');
		$UserModel->insert([
			'userName' => 'administor', 
			'firstName' => 'admin',
			'lastName' 	=> 'admin',
			'eMail'		=> 'admin@gmail.com', 
			'password'	=> '12345',  
			'isActive'	=> 1
		]);
	 
	}
}
