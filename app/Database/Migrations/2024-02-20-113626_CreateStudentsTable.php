<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'course' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'hear_about' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('registrations');
    }

    public function down()
    {
        $this->forge->dropTable('registrations');
    }
}
