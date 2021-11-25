<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
                'default' => '1',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
                'unique' => true
            ],
            'mobile' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'address_proof' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'default' => '0',
            ],
            'deleted_at datetime default null',
            'created_at datetime default null',
            'updated_at datetime default null on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
