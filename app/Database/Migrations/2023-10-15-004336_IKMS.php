<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKMS extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikms'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            't_rm_ibadah'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_kerja_bakti'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_pembinaan_sosial'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_ikms', TRUE);

        $this->forge->createTable('ikms', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikms');
    }
}
