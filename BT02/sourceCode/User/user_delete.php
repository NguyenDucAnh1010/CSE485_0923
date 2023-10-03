<?php
    include("../Connect/connect.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM user WHERE id='$id'";

        mysqli_query($conn, $sql);

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/User/?success={$id}");
        exit();
    }
?>