<?php
$conn = mysqli_connect("localhost","root","","db");
if(mysqli_connect_error($conn)){
    echo "error while connection ".mysqli_connect_error();
}
?>