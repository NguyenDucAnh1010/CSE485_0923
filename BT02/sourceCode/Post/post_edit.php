<?php
    include("../Connect/connect.php");

    if(isset($_GET['id'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['mobilephone'])&&isset($_POST['password'])){
        $id = $_GET['id'];
        $user = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobilephone'];
        $pass = $_POST['password'];

        $sql = "UPDATE user
        SET username = '$user', password = '$pass', email = '$email', mobilephone = '$mobile'
        WHERE id='$id'";

        mysqli_query($conn, $sql);

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/User/");
        exit();
    }
    
?>