<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Indikator extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_indikator'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_variabel'       => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'indikator'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'bobot'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'nilai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_indikator', TRUE);

        $this->forge->createTable('t_indikator', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('t_indikator');
    }
}
