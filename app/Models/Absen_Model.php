<?php

namespace App\Models;

use CodeIgniter\Model;

class Absen_Model extends Model
{
    protected $table      = 'absen';
    protected $primaryKey = 'id_absen';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_absen', 'id_pertemuan', 'id_mahasiswa'];
    protected $createdField  = 'created_at';

    public function getData($kode)
    {
         return $this->db->table('absen')
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = absen.id_mahasiswa')
         ->where('id_pertemuan', $kode)
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