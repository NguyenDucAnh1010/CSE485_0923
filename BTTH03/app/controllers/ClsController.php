<?php

require_once APP_ROOT.'/app/services/ClsService.php';

class ClsController {
    
    public function index(){

        $title = 'cls';
        
        $clsService = new ClsService();
        $clses = $clsService->getAllClses();

        include APP_ROOT.'/app/views/Cls/index.php';
    }

    public function add_cls(){

        $title = 'cls';

        include APP_ROOT.'/app/views/Cls/add_cls.php';
    }

    public function cls_add($tenLop){

        $clsService = new ClsService();
        $check = $clsService->addCls($tenLop);

        if ($check){
            $this->index();
        }else{
            $this->add_cls();
        }
    }

    public function edit_cls($id){

        $title = 'cls';

        $clsService = new ClsService();
        $cls = $clsService->getByClsId($id);

        include APP_ROOT.'/app/views/Cls/edit_cls.php';
    }

    public function cls_edit($id,$tenLop){

        $clsService = new ClsService();
        $check = $clsService->editCls($id,$tenLop);

        if ($check){
            $this->index();
        }else{
            $this->edit_cls($id);
        }
    }

    public function delete_cls($id){

        $clsService = new ClsService();
        $check = $clsService->deleteCls($id);

        if ($check){
            $this->index();
        }else{
            $this->index();
        }
    }
}

?>