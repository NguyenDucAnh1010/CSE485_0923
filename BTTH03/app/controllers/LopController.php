<?php

require_once APP_ROOT.'/app/services/LopService.php';

class LopController {
    
    public function index(){

        $title = 'lop';
        
        $LopService = new LopService();
        $lops = $LopService->getAllLops();

        include APP_ROOT.'/app/views/Lop/index.php';
    }

    public function add_lop(){

        $title = 'lop';

        include APP_ROOT.'/app/views/Lop/add_lop.php';
    }

    public function add($tenLop){

        $LopService = new LopService();
        $LopService->add($tenLop);
    }

    public function edit_lop($ma_tloai){

        $title = 'theloai';

        $LopService = new LopService();
        $lop = $LopService->show($ma_tloai);

        include APP_ROOT.'/app/views/Lop/edit_lop.php';
    }

    public function edit($ma_lop,$tenLop){

        $LopService = new LopService();
        $LopService->edit($ma_lop,$tenLop);
    }

    public function delete($ma_lop){

        $LopService = new LopService();
        $LopService->delete($ma_lop);
    }
}

?>