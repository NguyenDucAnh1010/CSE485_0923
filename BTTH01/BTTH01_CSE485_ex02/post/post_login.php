<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        try{
            //Buoc 1: Mo ket noi
            $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root","10102003");
            //Buoc 2: Thuc hien truy van
            $sql = "SELECT * FROM users 
            WHERE username = '$username';";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            //Buoc 3: Xu ly ket qua
            if($stmt->rowCount() > 0) {
                $user = $stmt->fetchAll();
                if ($user[0]['role']!="admin"){
                    header("location: ../login.php");
                    exit();
                }
                
                $pass_hash = $user[0]['password'];
                if(password_verify($password, $pass_hash)){
                    //CAP THE (authentication - Not: authorization)
                    session_start();
                    $_SESSION['isLogin'] = $username;
                    header("location: ../admin/index.php");
                    exit();
                }else{
                    header("location: ../login.php");
                    exit();
                }
                
            }else{
                header("location: ../login.php");
                exit();
            }

        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }else{
        header("location: ../login.php");
        exit();
    }
?>