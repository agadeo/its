<?php

namespace App\Controllers;
use App\Models\Matakuliah_Model;
use App\Models\Krs_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Nilai extends BaseController {
	

    public function index(){
        $model = new Matakuliah_Model();
        $data['data'] = $model->getData();
        
        return view('nilai',$data);
    }

    public function MK($id){
        $model = new Krs_Model();
        $data['data'] = $model->getNilai($id);
        
        return view('nilai_new',$data);
    }
}
