<?php
    require_once 'conn.php';

    $sql = "CREATE TABLE golden2(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR (50) NOT NULL,
        email VARCHAR (100),
        age INT(10)
    )";

    if($conn->query($sql)==true){
        echo "<h3>Table created successfully</h3>";
    }else{
        echo "Error while creating table ".$conn->error;
    }
?>