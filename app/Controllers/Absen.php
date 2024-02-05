<?php

namespace App\Controllers;
use App\Models\Absen_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Absen extends BaseController {
	

  	public function index($kode){
        $model = new Absen_Model();
        $data['data'] = $model->getData($kode);
        
        return view('absen',$data);
    }
}
