<?php

require_once APP_ROOT.'/app/services/ClsService.php';

class ClsController {
    
    public function index(){

        $title = 'cls';

        $page = isset($_GET['page'])?$_GET['page']:1;
        
        $clsService = new ClsService();
        $clses = $clsService->getByClsCount($page);
        $total = count($clsService->getAllClses());

        include APP_ROOT.'/app/views/cls/index.php';
    }

    public function add_cls(){

        $title = 'cls';

        include APP_ROOT.'/app/views/cls/add_cls.php';
    }

    public function cls_add(){
        
        if(isset($_POST['tenLop'])){

            $tenLop = $_POST['tenLop'];

            $clsService = new ClsService();
            $check = $clsService->addCls($tenLop);
    
            if ($check){
                $this->index();
            }else{
                $this->add_cls();
            }
        }
    }

    public function edit_cls(){

        $title = 'cls';

        $id = isset($_GET['idSelect'])?$_GET['idSelect']:null;

        $clsService = new ClsService();
        $cls = $clsService->getByClsId($id);

        include APP_ROOT.'/app/views/cls/edit_cls.php';
    }

    public function cls_edit(){

        if(isset($_POST['id'])
        &&isset($_POST['tenLop'])){

            $id = $_POST['id'];
            $tenLop = $_POST['tenLop'];

            $clsService = new ClsService();
            $check = $clsService->editCls($id,$tenLop);

            if ($check){
                $this->index();
            }else{
                $this->edit_cls();
            }
        }
    }

    public function delete_cls(){

        $id = isset($_GET['idSelect'])?$_GET['idSelect']:null;

        $clsService = new ClsService();
        $clsService->deleteCls($id);

        $this->index();
    }
}

?>