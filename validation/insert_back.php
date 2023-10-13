<html>

<body>
    <?php
    require_once 'conn.php';
    $name = $nameErr = $email = $emailErr = $age = $ageErr ="";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
    }
    // echo "$name $email $age";
    $sql = "INSERT INTO golden2(name,email,age) VALUES ('$name','$email',$age);";

    if ($conn->query($sql) == true) {
        echo '<script language="javascript">';
        echo 'alert("Successfully Inserted"); location.href="insert_data.php"';
        echo '</script>';
    } else {
        echo "error while inserting data " . $conn->error;
    }
    ?>
</body>

</html>