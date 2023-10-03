<?php

require_once APP_ROOT.'/app/services/SinhvienService.php';

class SinhvienController {
    
    public function index(){

        $title = 'sinhvien';
        
        $SinhvienService = new SinhvienService();
        $sinhviens = $SinhvienService->getAllSinhviens();

        include APP_ROOT.'/app/views/Sinhvien/index.php';
    }

    public function add_sinhvien(){

        $title = 'sinhvien';

        include APP_ROOT.'/app/views/Sinhvien/add_sinhvien.php';
    }

    public function add($tenSinhVien, $email, $ngaySinh,$idLop){

        $SinhvienService = new SinhvienService();
        $SinhvienService->add($tenSinhVien, $email, $ngaySinh,$idLop);
    }

    public function edit_sinhvien($id){

        $title = 'sinhvien';

        $SinhvienService = new SinhvienService();
        $sinhvien = $SinhvienService->show($id);

        include APP_ROOT.'/app/views/Sinhvien/edit_sinhvien.php';
    }

    public function edit($id,$tenSinhVien, $email, $ngaySinh,$idLop){

        $SinhvienService = new SinhvienService();
        $SinhvienService->edit($id,$tenSinhVien, $email, $ngaySinh,$idLop);
    }

    public function delete($id){

        $SinhvienService = new SinhvienService();
        $SinhvienService->delete($id);
    }
}

?>