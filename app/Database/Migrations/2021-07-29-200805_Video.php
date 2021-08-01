<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Video extends Migration
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
			'Url'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 250, 
			],
			'Time'          => [
				'type'           => 'int',
				'constraint'     => 11, 
			],
			'HitCount'          => [
				'type'           => 'int',
				'constraint'     => 11, 
			],
			'reCaptcha'          => [
				'type'           => 'tinyint',
				'constraint'     => 2, 
			],
			'RedirectUrl' => [
					'type' => 'varchar',
					'constraint' => 50
			]
		
		


		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('videoTable');
		//
		//
	}

	public function down()
	{
		$this->forge->dropTable('walletTable');

		//
	}
}
