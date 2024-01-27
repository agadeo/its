<?php

namespace App\Controllers;
use App\Models\Matakuliah_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Matakuliah extends BaseController {
	

  	public function index(){
        $model = new Matakuliah_Model();
        $data['data'] = $model->getData();
        
        return view('matakuliah',$data);
    }
}
