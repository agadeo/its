<?php

namespace App\Controllers;
use App\Models\Mahasiswa_Model;
use App\Models\Krs_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class KRS extends BaseController {
	

    public function index(){
        $model = new Mahasiswa_Model();
        $data['data'] = $model->getData();
        
        return view('krs',$data);
    }

    public function view($id){
        $model = new Krs_Model();
        $data['data'] = $model->getData($id);
        
        return view('krs_view',$data);
    }
}
