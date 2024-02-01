<?php

namespace App\Controllers;
use App\Models\Mahasiswa_Model;
use App\Models\Matakuliah_Model;
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
        $model3 = new Mahasiswa_Model();
        $data['data'] = $model->getData($id);
        $data['data2']= $model3->where('nim', $id)->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')->first();
        if (!$data['data']) {
            throw PageNotFoundException::forPageNotFound();
        }else{
        return view('krs_view',$data);            
        }
    }

    public function add($id){
        $model2 = new Krs_Model();
        $model = new Matakuliah_Model();
        $model3 = new Mahasiswa_Model();
        $data['cities'] = $model->getdrop();
        $data['data1'] = $model->get_by_mhs();
        $data['data2']= $model3->where('nim', $id)->first();
        return view('krs_add',$data);            
    }

}
