<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKL extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikl'          => [
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
            't_saluran_air'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_sampah'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_air_bersih'      => [
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

        $this->forge->addKey('id_ikl', TRUE);

        $this->forge->createTable('ikl', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikl');
    }
}
