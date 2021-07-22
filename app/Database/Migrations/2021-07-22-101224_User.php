<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'userName'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'unique' 	 => true
			],
			'firstName'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'lastName'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'eMail' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'unique' 	 => true

			],
			'phone'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15', 

			],
			'location'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50', 

			],
			'birthDay'       => [
				'type'       => 'VARCHAR',
				'constraint' => '15', 

			],
			

			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'IBAN' => [
				'type' => 'TEXT',
				'null' => true,
			],
		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('usertable');
		//
	}

	public function down()
	{
		$this->forge->dropTable('usertable');
		//
	}
}
