<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKS extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_iks'          => [
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
            't_kebijakan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_konflik_massal'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_konflik_pemerintah'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_sosial'      => [
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

        $this->forge->addKey('id_iks', TRUE);

        $this->forge->createTable('iks', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('iks');
    }
}
