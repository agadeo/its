<?php

namespace App\Models;

use CodeIgniter\Model;

class Krs_Model extends Model
{
    protected $table      = 'krs';
    protected $primaryKey = 'id_krs';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_krs', 'id_mahasiswa','id_matakuliah','absen','tugas','uts','uas','hasil'];
    protected $createdField  = 'created_at';

    public function getData($id)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', $id)
         ->get()->getResultArray(); 
    }

    public function getRow()
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', '22103001002')
         ->where('id_priode', '3')
         ->countAllResults(); 
    }

    public function getKhs($id, $smt)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', $id)
         ->where('semester', $smt)
         ->get()->getResultArray(); 
    }

    public function getTranskip($id)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', $id)
         ->get()->getResultArray(); 
    }

    public function getPrint($id, $smt)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', $id)
         ->where('semester', $smt)
         ->get()->getResultArray(); 
    }

    public function getPrint_t($id)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('nim', $id)
         ->get()->getResultArray(); 
    }

    public function getNilai($id)
    {
         return $this->db->table('krs')
         ->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')  
         ->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')       
         ->where('kode', $id)
         ->get()->getResultArray(); 
    }

}