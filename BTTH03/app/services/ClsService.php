<?php

require_once APP_ROOT.'/app/models/Cls.php';

class ClsService{
    public function getAllClses(){

        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $Clses = [];
            while ($row = $stmt->fetch()){
                $Cls = new Cls($row['id'],$row['tenLop']);
                $Clses[] = $Cls;
            }

            return $Clses;

        }else{
            return $Clses = [];
        }
    }

    public function addCls($tenLop){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xử lý kết quả
            $rowCount = $stmt->rowCount();

            for ($i=1;$i<=$rowCount;$i++) {
                $sql = "SELECT * FROM lop 
                        WHERE id = '$i';";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($stmt->rowCount()<=0){
                    break;
                }
            }

            $sql = "INSERT INTO lop (id,tenLop) 
                    VALUES ('$i','$tenLop');";
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }

        }else{
            return false;
        }
        
    }

    public function getByClsId($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop 
                    WHERE id='$id';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();

            $Cls = new Cls($row[0]['id'],$row[0]['tenLop']);

            return $Cls;
        }else{
            return null;
        }
        
    }

    public function editCls($id,$tenLop){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "UPDATE lop
                    SET tenLop = '$tenLop'
                    WHERE id='$id'";

            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();

            //Buoc 3: Xử lý kết quả

            if ($result) {
                return true;
            } else {
                return false;
            }
        }else{
            return true;
        }
        
    }

    public function deleteCls($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM lop 
                    WHERE id='$id'";
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();

            //Buoc 3: Xử lý kết quả
            
            if ($result) {
                return true;
            } else {
                return false;
            }
        }else{
            return true;
        }
        
    }
}