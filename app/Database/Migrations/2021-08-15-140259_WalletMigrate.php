<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WalletMigrate extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'ID'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'userId'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unique'		 => true
			],
			'earnedMoney' => [
				'type' => 'FLOAT',
				'constraint' => 11,
				'default' => 0.000007
			], 
			'walletMoney' => [
				'type' => 'FLOAT',
				'constraint' => 11,
				'default' => 0.000007
			], 
			'created_at DATETIME default current_timestamp ',
			'updated_at DATETIME default current_timestamp on update current_timestamp',
			'deleted_at DATETIME default null',
		 
		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('WalletTable');
		//
		//
	}

	public function down()
	{
		$this->forge->dropTable('WalletTable');

		//
	}
}
