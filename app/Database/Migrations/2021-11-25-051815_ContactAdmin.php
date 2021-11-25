<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
                'default' => '1',
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'subject' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
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
        $this->forge->createTable('contact_admin');
    }

    public function down()
    {
        $this->forge->dropTable('contact_admin');
    }
}
