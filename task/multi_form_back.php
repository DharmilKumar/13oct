<?php
    require_once 'conn.php';
    if(isset($_POST['formnumber'])){
        $n = $_POST['formnumber'];
        for($i = 1;$i<=$n;$i++){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $name = $_POST["name$i"];
                $surname = $_POST["surname$i"];
                $email = $_POST["email$i"];
                $contact = $_POST["contact$i"];
                $gender = $_POST["gender$i"];
                $sql = "INSERT INTO multiform(name,surname,email,contact,gender) VALUES ('$name','$surname','$email',$contact,'$gender');";
                if($conn->query($sql)){
                    echo "Form Data ".$i." Inserted<br>";
                }else{
                    echo "Error while inserting data ".$conn->error;
                }
            }
        }
    }
?>