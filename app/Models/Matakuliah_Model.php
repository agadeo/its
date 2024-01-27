<?php

namespace App\Models;

use CodeIgniter\Model;

class Matakuliah_Model extends Model
{
    protected $table      = 'matakuliah';
    protected $primaryKey = 'id_matakuliah';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_matakuliah', 'id_dosen', 'matakuliah', 'jurusan','semester','sks', 'hari', 'jam'];
    protected $createdField  = 'created_at';

    public function getData()
    {
         return $this->db->table('matakuliah')
         ->join('jurusan', 'jurusan.id_jurusan = matakuliah.jurusan')
         ->join('dosen', 'dosen.id_dosen = matakuliah.id_dosen')
         ->orderBy('matakuliah', 'ASC')
         ->get()->getResultArray(); 
    }

}