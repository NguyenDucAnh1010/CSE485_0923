<?php

require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBConnection.php';

require_once APP_ROOT.'/app/controllers/ClsController.php';
require_once APP_ROOT.'/app/controllers/StudentController.php';

$controller = isset($_GET['controller'])?$_GET['controller']:'student';
$action     = isset($_GET['action'])?$_GET['action']:'index';

$controller = ucfirst($controller);

$controller = $controller."Controller";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $myController = new $controller();

    if ($controller=='ClsController'){

        if($action=='cls_add'){

            $tenLop = $_POST['tenLop'];
            $myController->$action($tenLop);

        }else if($action=='cls_edit'){

            $id = $_POST['id'];
            $tenLop = $_POST['tenLop'];
            $myController->$action($id,$tenLop);

        }

    }else if($controller=='StudentController' ){

        if($action=='student_add'){

            $tenSinhVien = $_POST['tenSinhVien'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idLop'];
            $myController->$action($tenSinhVien, $email, $ngaySinh,$idLop);
            
        }else if($action=='student_edit'){

            $id = $_POST['id'];
            $tenSinhVien = $_POST['tenSinhVien'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idLop'];
            $myController->$action($id, $tenSinhVien, $email, $ngaySinh,$idLop);

        }

    }
}

$myController = new $controller();
if (method_exists($myController, $action)) {
    if (isset($_GET['idStudent'])){
        $myController->$action($_GET['idStudent']);
    }else if(isset($_GET['idCls'])){
        $myController->$action($_GET['idCls']);
    }
    $myController->$action();
} else {
    echo "$action does not exist in $controller class";
}