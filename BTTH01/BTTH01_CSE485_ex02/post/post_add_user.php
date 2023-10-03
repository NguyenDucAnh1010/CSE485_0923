<?php
if(isset($_POST['username']) && isset($_POST['email'])
&& isset($_POST['password1']) && isset($_POST['role'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $role = $_POST['role'];
//    $pass2 = $_POST['pass2'];

//    if($pass1 != $pass2){
//        $error = "Mật khẩu không khớp";
//        header("Location: user_add.php?error=$error");
//    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root","10102003");
        //Buoc 2: Thuc hien truy van
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO users (username, password, email, role) VALUES ('$username', '$pass_hash', '$email', '$role')";

        //Buoc 3: Xử lý kết quả
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            session_start();
            $_SESSION['verify'] = $email;
            $_SESSION['username'] = $username;
            header("Location: ../verify_email.php");
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}