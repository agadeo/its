<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKK extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikk'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            't_laju_pertumbuhan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_pengangguran'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_pendidikan'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_bencana'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_distribusi'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_ikk', TRUE);

        $this->forge->createTable('ikk', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikk');
    }
}
