<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VideoMigrate extends Migration
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
			],
			'link' => [
				'type' => 'VARCHAR',
				'constraint' => 150
			],
			'videoId' => [
				'type' => 'VARCHAR',
				'constraint' => 20
			],
			'group' => [
				'type' => 'VARCHAR',
				'constraint' => 150
			],
			'advertsType' => [
				'type' => 'VARCHAR',
				'constraint' => 150
			],
			'buttonText'=> [
				'type' => 'VARCHAR',
				'constraint' => 150
			],
			'redirectUrl'=> [
				'type' => 'VARCHAR',
				'constraint' => 150
			],
			'trafic'=> [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'duration'=> [
				'type' => 'INT',
				'constraint' => 11
			],
			'viewPerPerson'=> [
				'type' => 'INT',
				'constraint' => 10
			],
			'viewPerHour'=> [
				'type' => 'INT',
				'constraint' => 10
			],
			'language'=> [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'isStart'=> [
				'type' => 'TINYINT',
				'constraint' => 2
			],
			'payment' => [
				'type' => 'FLOAT',
				'default' => 1.00
			],
			'created_at DATETIME default current_timestamp ',
			'updated_at DATETIME default current_timestamp on update current_timestamp',
			'deleted_at DATETIME default null',
		


		]);
		$this->forge->addKey('ID', true);
		$this->forge->createTable('videoTable');
		//
		//
	}

	public function down()
	{
		$this->forge->dropTable('videoTable');

		//
	}
}
