<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tag' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'publish_date' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'publish_time' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
            ],
            'media' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null'=>true
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
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
