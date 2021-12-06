<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CalendarUpdate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
            ],
            'start_date' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
            ],
            'start_time' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
            ],
            'end_date' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
            ],
            'end_time' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => false,
            ],
            'file' => [
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
        $this->forge->createTable('calendar_updates');
    }

    public function down()
    {
        $this->forge->dropTable('calendar_updates');
    }
}
