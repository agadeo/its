<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKPF extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikpf'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kab'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tahun'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],            
            't_kebakaran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_banjir'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_kekumuhan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'hasil'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_ikpf', TRUE);

        $this->forge->createTable('ikpf', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikpf');
    }
}
