<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IKKK extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ikkk'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            't_keamanan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            't_kriminalisasi'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            't_konflik'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'status'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_ikkk', TRUE);

        $this->forge->createTable('ikkk', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('ikkk');
    }
}
