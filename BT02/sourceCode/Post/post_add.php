<?php
    include("../Connect/connect.php");

    if(isset($_POST['username'])&&isset($_POST['password'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobilephone'];
        $pass = $_POST['password'];

        $sql = "insert into user (username, password, email, mobilephone) 
            values('$user', '$pass', '$email', '$mobile')";

        mysqli_query($conn, $sql);

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/User/");
        exit();
    }
    
?>