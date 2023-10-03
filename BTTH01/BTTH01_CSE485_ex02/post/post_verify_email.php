<?php

session_start();

if(!isset($_SESSION['verify'])||!$_SESSION['username']){
    header("location: signup.php");
}

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root","10102003");
    //Buoc 2: Thuc hien truy van
    
    $sql = "UPDATE users
    SET status = 'active'
    WHERE email = '{$_SESSION['verify']}' and username = '{$_SESSION['username']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("location: ../login.php");
    exit();

}catch(PDOException $e){
    echo $e->getMessage();
}