<?php

namespace App\Controllers;
use App\Models\Mahasiswa_Model;
use App\Models\Matakuliah_Model;
use App\Models\Krs_Model;
use App\Models\Priode_Model;

use CodeIgniter\Exceptions\PageNotFoundException;

class KRS extends BaseController {
	

    public function index(){
        $model = new Mahasiswa_Model();
        $model2 = new Krs_Model();
        $data['data'] = $model->getData();
        $data2 = $model->getDataM();
                
        // echo "<pre>";
        // print_r($data2);
        // echo "</pre>";

        // if ($data2 < 1) {
        //     $data['tombol'] = "hidden";
        // } else {
        //     $data['tombol'] = "ada";
        // }


        return view('krs',$data);
    }

    public function view($id){
        $model = new Krs_Model();
        $model3 = new Mahasiswa_Model();
        $model4 = new Priode_Model();
        $data['data'] = $model->getData($id);
        $data['data4'] = $model4->hitung();
        $data['data2']= $model3->where('nim', $id)->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan')->first();
        $data['data3']= $model4->where('sts', '1')->first();
        if ($data['data4'] == 1) {
            $data['cek'] = ' ';
        } else {
            $data['cek'] = 'hidden';
        }
        

        if (!$data['data']) {
            throw PageNotFoundException::forPageNotFound();
        }else{
        return view('krs_view',$data);            
        }
    }

    public function add($id, $jur, $sts, $smt){
        $model2 = new Krs_Model();
        $model = new Matakuliah_Model();
        $model3 = new Mahasiswa_Model();
        $model4 = new Priode_Model();
        $data['cities'] = $model->getdrop($jur, $smt);
        $data['data1'] = $model->get_by_mhs();
        $data['data2']= $model3->where('nim', $id)->first();
        $data['data3']= $model4->where('sts', '1')->first();
        return view('krs_add',$data);            

    }

}
