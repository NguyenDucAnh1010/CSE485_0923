<?php

require_once APP_ROOT.'/app/models/Student.php';

class StudentService{
    public function getAllStudents(){

        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM sinhvien;";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            //Buoc 3: Xu ly ket qua
            $students = [];
            while ($row = $stmt->fetch()){
                $student = new Student($row['id'],
                                $row['tenSinhVien'],
                                $row['email'],
                                $row['ngaySinh'],
                                $row['idLop']);
                $students[] = $student;
            }

            return $students;
        }else{
            return $students = [];
        }
    }

    public function addStudent($tenSinhVien, $email, $ngaySinh,$idLop){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop WHERE id='$idLop';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                return false;
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

    public function getByStudentId($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM sinhvien 
                    WHERE id='$id';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            $row = $stmt->fetchAll();

            $student = new student($row[0]['id'],
                                    $row[0]['tenSinhVien'],
                                    $row[0]['email'],
                                    $row[0]['ngaySinh'],
                                    $row[0]['idLop']);

            return $student;
        }else{
            return null;
        }
        
    }

    public function editStudent($id, $tenSinhVien, $email, $ngaySinh, $idLop){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM lop 
                    WHERE id='$idLop';";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount()<=0){
                return false;
            }

            //Buoc 3: Xử lý kết quả

            $sql = "UPDATE sinhvien
                    SET tenSinhVien = '$tenSinhVien', 
                        email = '$email', 
                        ngaySinh = '$ngaySinh', 
                        idLop = '$idLop'
                    WHERE id='$id';";

            $stmt = $conn->prepare($sql);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else {
                return false;
            }
        }else{
            return true;
        }
        
    }

    public function deleteStudent($id){
        
        //Buoc 1: Mo ket noi
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            //Buoc 2: Thuc hien truy van
            $sql = "DELETE FROM sinhvien 
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