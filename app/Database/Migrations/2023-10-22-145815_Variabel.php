<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Variabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_variabel'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_aspek'       => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'variabel'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'bobot'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_variabel', TRUE);

        $this->forge->createTable('t_variabel', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('t_variabel');
    }
}
