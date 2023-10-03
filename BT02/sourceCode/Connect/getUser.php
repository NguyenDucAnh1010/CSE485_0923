<?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else{
        $page=1;
    }
    include("connect.php");
    $n=10*($page-1);
    $sql = "SELECT * FROM User LIMIT 10, $perPage";
    $sqlTotalRecords = "SELECT COUNT(*) as total FROM user";
    $resultTotalRecords = mysqli_query($conn, $sqlTotalRecords);
    $rowTotalRecords = mysqli_fetch_assoc($resultTotalRecords);
    $totalRecords = $rowTotalRecords['total'];
    $result = mysqli_query($conn, $sql);
?>