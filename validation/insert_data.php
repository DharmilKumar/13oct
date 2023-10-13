<!DOCTYPE html>
<html>

<head>
    <style>
        .error {
            color: red;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <?php
    require_once 'conn.php';
    $name = $nameErr = $email = $emailErr = $age = $ageErr = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            $nameErr = 'Name is require';
        } else {
            $name = $_POST['name'];
        }
        if (empty($_POST['email'])) {
            $emailErr = 'email is require';
        } else {
            $email = $_POST['email'];
        }
        if (empty($_POST['age'])) {
            $ageErr = 'age is require';
        } else {
            $age = $_POST['age'];
        }

        if (!empty($name) && !empty($email) && !empty($age)) {
            $sql = "INSERT INTO golden2(name,email,age) VALUES ('$name','$email',$age);";

            if ($conn->query($sql) == true) {
                echo '<script language="javascript">';
                echo 'alert("Successfully Inserted"); location.href="insert_data.php"';
                echo '</script>';
            } else {
                echo "error while inserting data " . $conn->error;
            }
        }
    }

    ?>
    <?php require_once 'nav.php'; ?>
    <div class="card mx-auto mt-5" style="width: 30rem;">
        <div class="card-body">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <span class="error"><?php echo $nameErr; ?></span>
                    <br><br>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <span class="error"><?php echo $emailErr; ?></span>
                    <br><br>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age">
                    <span class="error"><?php echo $ageErr; ?></span>
                    <br><br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>