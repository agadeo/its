<?php

namespace App\Controllers;
use App\Models\Mahasiswa_Model;
use App\Models\Krs_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class KHS extends BaseController {
  

    public function index(){
        $model = new Mahasiswa_Model();
        $data['data'] = $model->getKhs();
        $data['datasmt'] = $model->getjumlah();
        return view('khs',$data);
    }

    public function view($id, $smt){
        $model = new Krs_Model();
        $data['data'] = $model->getKhs($id, $smt);
        $data['data2'] = $model->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')->where('nim', $id)->where('semester', $smt)->first();
        
        return view('khs_view',$data);
    }

    public function print($id, $smt){
        $model = new Mahasiswa_Model();
        $model2 = new Krs_Model();

        $data['data'] = $model->getKhs($id, $smt);
        $data['result'] = $model->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')->join('dosen', 'dosen.jabatan = mahasiswa.id_jurusan')->where('nim', $id)->first();
        $data['data2'] = $model2->getPrint($id, $smt);
        // echo "<pre>";
        // print_r($d);
        // echo "</pre>";

        $data['data3'] = $model2->join('matakuliah', 'matakuliah.id_matakuliah = krs.id_matakuliah')->join('mahasiswa', 'mahasiswa.id_mahasiswa = krs.id_mahasiswa')->where('nim', $id)->where('semester', $smt)->first();

        return view('khs_print',$data);




    }
}
