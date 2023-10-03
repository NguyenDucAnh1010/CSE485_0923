<?php
    session_start();

    if(!isset($_SESSION['isLogin'])){
        header("location: ../login.php");
    }
    
    if(isset($_POST['ma_tgia']) && isset($_POST['ten_tgia']) && isset($_POST['hinh_tgia'])){
        $ma_tgia = $_POST['ma_tgia'];
        $ten_tgia = $_POST['ten_tgia'];
        $hinh_tgia = $_POST['hinh_tgia'];

        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root","10102003");
            //Buoc 2: Thuc hien truy van
            
            $sql = "UPDATE tacgia
            SET ten_tgia = '$ten_tgia', hinh_tgia = '$hinh_tgia'
            WHERE ma_tgia='$ma_tgia';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ../admin/author.php?admin=true");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        header("location: ../admin/edit_author.php?admin=true");
        exit();
    }
?>