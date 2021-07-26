<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wallet extends Migration
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
			'googleId'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 250,
				'unique' 	 	 => true

			],
		


		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('walletTable');
		//
	}

	public function down()
	{
		$this->forge->dropTable('walletTable');
		//
	}
}
