<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comments extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'model_id' => [
                'type' => 'INT',
                'constraint' => '10',
                'null' => false,
            ],
            'rating' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
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
        $this->forge->createTable('comments');
    }

    public function down()
    {
        $this->forge->dropTable('comments');
    }
}
