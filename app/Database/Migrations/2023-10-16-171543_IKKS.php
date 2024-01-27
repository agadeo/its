<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKKS extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikks'          => [
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
            't_kebijakan_kes'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_puskesmas'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_berobat'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_bpjs'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_anggaran'      => [
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

        $this->forge->addKey('id_ikks', TRUE);

        $this->forge->createTable('ikks', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikks');
    }
}
