<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_Model extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_mahasiswa', 'id_user', 'id_jurusan','nim','nama'];
    protected $createdField  = 'created_at';

    public function getData()
    {
         return $this->db->table('mahasiswa')
         ->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')
         ->get()->getResultArray(); 
    }

        public function getDataM()
    {
         return $this->db->table('mahasiswa')
         ->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')
         ->join('krs', 'krs.id_mahasiswa = mahasiswa.id_mahasiswa')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')
         ->where('id_priode','3')
         ->groupBy('nim')
          ->select('nama as nama, count(matakuliah) as jum')

         ->get()->getResultArray(); 
    }

    public function getKhs()
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')  
         ->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')
         ->groupBy('nim')
         ->get()->getResultArray(); 
    }

    public function getjumlah()
    {
         return $this->db->table('matakuliah')
         ->groupBy('semester')
         ->select('semester as semester')
         ->get()->getResultArray();  
    }

    public function getMah($id)
    {
         return $this->db->table('mahasiswa')
         ->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')
         ->join('dosen', 'dosen.jabatan = mahasiswa.id_jurusan')
         ->where('nim', $id)
         ->get()->getResultArray(); 
    }


}