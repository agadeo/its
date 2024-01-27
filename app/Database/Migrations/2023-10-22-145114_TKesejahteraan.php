<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TKesejahteraan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_aspek'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'aspek'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
        ]);

        $this->forge->addKey('id_aspek', TRUE);

        $this->forge->createTable('t_aspek', TRUE);    
    }

    public function down()
    {
        $this->forge->dropTable('t_aspek');
    }
}
