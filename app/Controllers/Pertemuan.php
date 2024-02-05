<?php

namespace App\Controllers;
use App\Models\Pertemuan_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pertemuan extends BaseController {
	

  	public function ajar($kode){
        $model = new Pertemuan_Model();
        $data['data'] = $model->getData($kode);
        
        return view('pertemuan',$data);
    }
}
