<?php

namespace App\Models;

use CodeIgniter\Model;

class Priode_Model extends Model
{
    protected $table      = 'priode';
    protected $primaryKey = 'id_priode';

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

    public function getPriode($id)
    {
         return $this->db->table('priode')
         ->join('krs', 'krs.id_priode = priode.id_priode')
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')
         ->groupBy('date_time')
         ->where('nim', $id)
         ->get()->getResultArray(); 
    }
    public function getdrop()
    {
       $query = $this->db->query('select * from matakuliah');
       return $query->getResult();
    }
    public function hitung()
    {
         return $this->db->table('priode')
         ->where('sts', '1')
         ->get()->getNumRows(); 
    }

    public function get_by_mhs()
    {
         return $this->db->table('mahasiswa')
         ->get()->getResultArray(); 
    }

}