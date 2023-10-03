<?php
    include("../Connect/connect.php");

    if (isset($_GET['id'])) {
        $userIds = $_GET['id'];

        // Tách danh sách các id thành mảng
        $idArray = explode(',', $userIds);

        // Loại bỏ khoảng trắng và các ký tự không hợp lệ khác
        $idArray = array_map('trim', $idArray);

        foreach ($idArray as $userId) {
            $sql = "DELETE FROM user WHERE id = '$userId'";
            mysqli_query($conn, $sql);
        }

        $conn->close();

        header("location: http://localhost/W3CMS/sourceCode/User/");
        exit();
    }
?>