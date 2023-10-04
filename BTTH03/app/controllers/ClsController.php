<?php

require_once APP_ROOT.'/app/services/ClsService.php';

class ClsController {
    
    public function index($page){

        $title = 'cls';
        
        $clsService = new ClsService();
        $clses = $clsService->getByClsCount($page);
        $total = count($clsService->getAllClses());

        include APP_ROOT.'/app/views/cls/index.php';
    }

    public function add_cls(){

        $title = 'cls';

        include APP_ROOT.'/app/views/cls/add_cls.php';
    }

    public function cls_add($tenLop,$page){

        $clsService = new ClsService();
        $check = $clsService->addCls($tenLop);

        if ($check){
            $this->index($page);
        }else{
            $this->add_cls();
        }
    }

    public function edit_cls($id){

        $title = 'cls';

        $clsService = new ClsService();
        $cls = $clsService->getByClsId($id);

        include APP_ROOT.'/app/views/cls/edit_cls.php';
    }

    public function cls_edit($id,$tenLop,$page){

        $clsService = new ClsService();
        $check = $clsService->editCls($id,$tenLop);

        if ($check){
            $this->index($page);
        }else{
            $this->edit_cls($id);
        }
    }

    public function delete_cls($id,$page){

        $clsService = new ClsService();
        $check = $clsService->deleteCls($id);

        if ($check){
            $this->index($page);
        }else{
            $this->index($page);
        }
    }
}

?>