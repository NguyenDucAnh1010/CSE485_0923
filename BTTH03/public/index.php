<?php

require_once('../app/config/config.php');

require_once APP_ROOT.'/app/controllers/LopController.php';
require_once APP_ROOT.'/app/controllers/SinhvienController.php';

$controller = isset($_GET['controller'])?$_GET['controller']:'sinhvien';
$action     = isset($_GET['action'])?$_GET['action']:'index';

$controller = ucfirst($controller);

$controller = $controller."Controller";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $myController = new $controller();

    if ($controller=='LopController'){

        if($action=='add'){

            $tenLop = $_POST['tenLop'];
            $myController->$action($tenLop);

        }else if($action=='edit'){

            $id = $_POST['id'];
            $tenLop = $_POST['tenLop'];
            $myController->$action($id,$tenLop);

        }

    }else if($controller=='SinhvienController' ){

        if($action=='add'){

            $tenSinhVien = $_POST['tenSinhVien'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idLop'];
            $myController->$action($tenSinhVien, $email, $ngaySinh,$idLop);
            
        }else if($action=='edit'){

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
    if (isset($_GET['ma_svien'])){
        $myController->$action($_GET['ma_svien']);
    }else if(isset($_GET['ma_lop'])){
        $myController->$action($_GET['ma_lop']);
    }
    $myController->$action();
} else {
    echo "$action does not exist in $controller class";
}