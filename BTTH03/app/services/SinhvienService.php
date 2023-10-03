<?php

require_once APP_ROOT.'/app/models/Sinhvien.php';

class SinhvienService{
    public function getAllSinhviens(){
        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM sinhvien;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $Sinhviens = [];
            while ($row = $stmt->fetch()){
                $Sinhvien = new Sinhvien($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaySinh'],$row['idLop']);
                $Sinhviens[] = $Sinhvien;
            }

            return $Sinhviens;
    
        }catch(PDOException $e){
            return $Sinhviens = [];
            // echo "Error: ".$e->getMessage();
        }
    }

    public function add($tenSinhVien, $email, $ngaySinh,$idLop){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van

            $sql = "SELECT * FROM lop WHERE id='$idLop';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                header("location: ?controller=sinhvien&action=add_sinhvien");
                exit();
            }

            $sql = "SELECT * FROM sinhvien;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();

            for ($i=1;$i<=$rowCount;$i++) {
                $sql = "SELECT * FROM sinhvien WHERE id = '$i';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<=0){
                    break;
                }
            }

            $sql = "INSERT INTO sinhvien (id,tenSinhVien,email,ngaySinh,idLop) 
            VALUES ('$i','$tenSinhVien','$email','$ngaySinh','$idLop');";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=sinhvien&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function show($ma_svien){
        
        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM sinhvien WHERE id='$ma_svien';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();

            $Sinhvien = new Sinhvien($row[0]['id'],$row[0]['tenSinhVien'],$row[0]['email'],$row[0]['ngaySinh'],$row[0]['idLop']);

            return $Sinhvien;

        }catch(PDOException $e){
            return null;
        }
        
    }

    public function edit($id, $tenSinhVien, $email, $ngaySinh,$idLop){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van

            $sql = "SELECT * FROM lop WHERE id='$idLop';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                header("location: ?controller=sinhvien&action=index");
                exit();
            }

            //Buoc 3: Xử lý kết quả

            $sql = "UPDATE sinhvien
            SET tenSinhVien = '$tenSinhVien', email = '$email', ngaySinh = '$ngaySinh', idLop = '$idLop'
            WHERE id='$id';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=sinhvien&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function delete($ma_svien){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            
            $sql = "DELETE FROM sinhvien WHERE id='$ma_svien'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=sinhvien&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }
}