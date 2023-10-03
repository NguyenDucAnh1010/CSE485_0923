<?php

require_once APP_ROOT.'/app/models/Lop.php';

class LopService{
    public function getAllLops(){
        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $Lops = [];
            while ($row = $stmt->fetch()){
                $Lop = new Lop($row['id'],$row['tenLop']);
                $Lops[] = $Lop;
            }

            return $Lops;
    
        }catch(PDOException $e){
            return $Lops = [];
            // echo "Error: ".$e->getMessage();
        }
    }

    public function add($tenLop){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();
            for ($i=1;$i<=$rowCount;$i++) {
                $sql = "SELECT * FROM lop WHERE id='$i';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<=0){
                    break;
                }
            }

            $sql = "INSERT INTO lop (id,tenLop) VALUES ('$i','$tenLop');";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=lop&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function show($ma_lop){
        
        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop WHERE id='$ma_lop';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();

            $Lop = new Lop($row[0]['id'],$row[0]['tenLop']);

            return $Lop;

        }catch(PDOException $e){
            return null;
        }
        
    }

    public function edit($ma_lop,$tenLop){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            
            $sql = "UPDATE lop
            SET tenLop = '$tenLop'
            WHERE id='$ma_lop'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=lop&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function delete($ma_lop){
        
        try{
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=quanlysinhvien", "root","10102003");
            //Buoc 2: Thuc hien truy van
            
            $sql = "DELETE FROM lop WHERE id='$ma_lop'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location: ?controller=lop&action=index");
            exit();
    
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }
}