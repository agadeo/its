<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKP extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikp'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'persediaan_pangan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_kosumsi_daging'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_kosumsi_telur'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_kosumsi_susu'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_kosumsi_ikan'      => [
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

        $this->forge->addKey('id_ikp', TRUE);

        $this->forge->createTable('ikp', TRUE);    }

    public function down()
    {
        $this->forge->dropTable('ikp');
    }
}
