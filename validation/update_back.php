<html>

<body>
    <?php
    require_once 'conn.php';
    $name = $email = $age = "";
    if(isset($_GET['updateid'])){
        $updateid = $_GET['updateid'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
    }
    $sql = "UPDATE golden2 set name='$name', email='$email', age=$age WHERE id=$updateid";

    if ($conn->query($sql) == true) {
        echo '<script language="javascript">';
        echo 'alert("Successfully Updated"); location.href="show_data.php"';
        echo '</script>';
    } else {
        echo "error while inserting data " . $conn->error;
    }
    ?>
</body>

</html>