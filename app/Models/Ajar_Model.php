<?php

namespace App\Models;

use CodeIgniter\Model;

class Ajar_Model extends Model
{
    protected $table      = 'ajar';
    protected $primaryKey = 'id_ajar';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_ajar', 'id_matakuliah', 'id_dosen', 'tahun'];
    protected $createdField  = 'created_at';

    public function getData()
    {
         return $this->db->table('ajar')
         ->join('matakuliah', 'matakuliah.id_matakuliah = ajar.id_matakuliah')
         ->join('dosen', 'dosen.id_dosen = ajar.id_dosen')
         ->join('jurusan', 'jurusan.id_jurusan = dosen.id_jurusan')
         ->get()->getResultArray(); 
    }

    public function getdrop()
    {
       $query = $this->db->query('select * from matakuliah');
       return $query->getResult();
    }

    public function get_by_mhs()
    {
         return $this->db->table('mahasiswa')
         ->get()->getResultArray(); 
    }

}