<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Nilai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_nilai'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_indikator'       => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'tahun'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'nilai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_nilai', TRUE);

        $this->forge->createTable('t_nilai', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('t_indikator');
    }
}
