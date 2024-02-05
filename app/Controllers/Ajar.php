<?php

namespace App\Controllers;
use App\Models\Ajar_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Ajar extends BaseController {
	

  	public function index(){
        $model = new Ajar_Model();
        $data['data'] = $model->getData();
        
        return view('ajar',$data);
    }
}
