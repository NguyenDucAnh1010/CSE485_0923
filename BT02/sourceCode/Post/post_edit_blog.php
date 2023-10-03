<?php
    include("../Connect/connect.php");

    if(isset($_GET['id'])&&isset($_POST['tittle'])&&isset($_POST['created_at'])){
        $id = $_GET['id'];
        $user = $_POST['tittle'];
        $email = $_POST['created_at'];

        $sql = "UPDATE blog
        SET tittle = '$user', created_at = '$email'
        WHERE id='$id'";

        mysqli_query($conn, $sql);

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/Blogs/");
        exit();
    }
    
?>