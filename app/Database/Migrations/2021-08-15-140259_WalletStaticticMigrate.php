<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WalletStatisticMigrate extends Migration
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
			'moneyType' => [
				'type' => 'CHAR',
				'constraint' => 2,
				'default' => 'WM'
			], 
			'moneyValue' => [
				'type' => 'FLOAT',
				'constraint' => 11,
			], 
			'created_at DATETIME default current_timestamp ',
			'updated_at DATETIME default current_timestamp on update current_timestamp',
			'deleted_at DATETIME default null',
		 
		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('WalletStatisticTable');
		//
		//
	}

	public function down()
	{
		$this->forge->dropTable('WalletStatisticTable');

		//
	}
}
