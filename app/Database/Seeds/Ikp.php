<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ikp extends Seeder
{
    public function run()
    {
        $news_data = [
            [
                'persediaan_pangan' => '87',
                't_kosumsi_daging'  => '75',
                't_kosumsi_telur' => '33',
                't_kosumsi_susu' => '24',
                't_kosumsi_ikan' => '98',
                'hasil' => '78',
                'status' => '1'
            ],
        ];

        foreach($news_data as $data){
            // insert semua data ke tabel
            $this->db->table('ikp')->insert($data);
        }    }
}
