<html>

<body>
    <?php
    require_once 'conn.php';
    $name = $email = $age = $name2 = $email2 = $age2 = $name3 = $email3 = $age3 = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $name2 = $_POST['name2'];
        $email2 = $_POST['email2'];
        $age2 = $_POST['age2'];

        $name3 = $_POST['name3'];
        $email3 = $_POST['email3'];
        $age3 = $_POST['age3'];
    }
    echo "$name $email $age $name2 $email2 $age2 $name3 $email3 $age3";
    $sql = "INSERT INTO golden2(name,email,age) VALUES ('$name','$email',$age);";
    $sql .= "INSERT INTO golden2(name,email,age) VALUES ('$name2','$email2',$age2);";
    $sql .= "INSERT INTO golden2(name,email,age) VALUES ('$name3','$email3',$age3);";

    if ($conn->multi_query($sql) == true) {
        echo '<script language="javascript">';
        echo 'alert("Successfully Inserted"); location.href="insert_data.php"';
        echo '</script>';
    } else {
        echo "error while inserting data " . $conn->error;
    }
    ?>
</body>

</html>