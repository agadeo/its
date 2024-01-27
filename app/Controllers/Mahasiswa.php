<?php

namespace App\Controllers;
use App\Models\Mahasiswa_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Mahasiswa extends BaseController {
	

  	public function index(){
        $model = new Mahasiswa_Model();
        $data['data'] = $model->getData();
        
        return view('mahasiswa',$data);
    }
}
