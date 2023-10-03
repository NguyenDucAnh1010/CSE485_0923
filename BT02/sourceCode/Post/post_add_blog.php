<?php
    include("../Connect/connect.php");

    if(isset($_POST['tittle'])&&isset($_POST['created_at'])){
        $user = $_POST['tittle'];
        $email = $_POST['created_at'];

        $sql = "insert into user (tittle, created_at) 
            values('$user', '$email')";

        mysqli_query($conn, $sql);

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/Blogs/");
        exit();
    }
    
?>