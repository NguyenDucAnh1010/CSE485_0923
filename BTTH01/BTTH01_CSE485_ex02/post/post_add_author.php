<?php
    session_start();

    if(!isset($_SESSION['isLogin'])){
        header("location: ../login.php");
    }

    if(isset($_POST['ten_tgia']) && isset($_POST['hinh_tgia'])){
        $ten_tgia = $_POST['ten_tgia'];
        $hinh_tgia = $_POST['hinh_tgia'];

        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM tacgia;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();
            for ($i=1;$i<=$rowCount;$i++) {
                $sql = "SELECT * FROM tacgia WHERE ma_tgia = '$i';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<=0){
                    break;
                }
            }

            $sql = "INSERT INTO tacgia (ma_tgia,ten_tgia,hinh_tgia) VALUES ('$i','$ten_tgia','$hinh_tgia');";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ../admin/author.php?admin=true");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }else{
        header("location: ../admin/add_author.php?admin=true");
        exit();
    }
?>