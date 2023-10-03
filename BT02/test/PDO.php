<?php
    try{
        //
        $conn = new PDO(dsn: "mysql:host=localhost;dbname:user",username: "root",password: "10102003");
        //
        $n = 10 * ($page - 1);
        $sql = "SELECT * FROM user LIMIT $n,10";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //
    }catch(PDOException $e){
        echo $e->getMessage;
    }
?>