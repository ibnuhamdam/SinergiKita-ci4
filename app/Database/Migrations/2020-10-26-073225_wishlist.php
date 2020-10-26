<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wishlist extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 25,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'Id_user'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'Id_barang' => [
				'type'           => 'VARCHAR',
				'constraint'           => '255'
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => TRUE
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => TRUE
			],
			'deleted_at' => [
				'type'           => 'DATETIME',
				'null'           => TRUE
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('wishlist');
	}

	public function down()
	{
		$this->forge->dropTable('blog');
	}
}
