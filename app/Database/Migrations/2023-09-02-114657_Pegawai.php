<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
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
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'posisi'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'jabatan'        => [
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
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
