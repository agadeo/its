<?php

namespace App\Models;

use CodeIgniter\Model;

class Pertemuan_Model extends Model
{
    protected $table      = 'pertemuan';
    protected $primaryKey = 'id_pertemuan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_pertemuan', 'id_matakuliah', 'id_dosen', 'code_qr', 'status','pertemuan','capaian', 'bahan', 'metode', 'ref', 'jenis', 'tanggal'];
    protected $createdField  = 'created_at';

    public function getData($kode)
    {
         return $this->db->table('pertemuan')
         ->join('matakuliah', 'matakuliah.id_matakuliah = pertemuan.id_matakuliah')
         ->where('kode', $kode)
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