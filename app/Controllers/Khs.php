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
        
        return view('khs_view',$data);
    }
}
