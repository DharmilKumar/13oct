<html>

<body>
    <?php
    require_once 'conn.php';

    $stmt = $conn->prepare("INSERT INTO golden2(name,email,age) VALUES (?,?,?)");
    $stmt->bind_param("ssi", $name, $email, $age);
    $name = $email = $age = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
    }
    $stmt->execute();
    echo '<script language="javascript">';
    echo 'alert("Successfully Inserted"); location.href="insert_data.php"';
    echo '</script>';

    $stmt->close();
    ?>
</body>

</html>