<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'password'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'name'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id'); 
        $this->forge->createTable('users');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
