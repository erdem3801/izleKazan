<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'userName' => 'hmet',
			'password'    => '12345'
		];

		$userModel = model('userModel');
		$userModel->insert($data);
	}
}
