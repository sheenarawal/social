<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'user_id',
                'constraint' => '190'
            ],
            'user_ps' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'guardian' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'district' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'state' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'pin' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'land_mark' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null'=>true
            ],
            'dob' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null'=>true
            ],
            'age' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'sex' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'qualification' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'curricular_activities' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'blood_group' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'occupation' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'other_society' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'introduced_by' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'null' => true
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '190',
                'default' => '0'
            ],
            'deleted_at datetime default null',
            'created_at datetime default null',
            'updated_at datetime default null on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('profiles');
    }

    public function down()
    {
        $this->forge->dropTable('profiles');
    }
}
