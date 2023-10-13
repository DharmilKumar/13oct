<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <?php require_once 'nav.php';?>
    <div class="card mx-auto mt-5" style="width: 30rem;">
        <div class="card-body">
            <form action="insert_mult_back.php" method="post">
                <div class="mb-3">
                    <legend>Person1 Info</legend>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Person1 Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Person1 address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Person1 Age</label>
                    <input type="number" class="form-control" id="age" name="age">
                </div>

                <div class="mb-3">
                    <legend>Person2 Info</legend>
                </div>


                <div class="mb-3">
                    <label for="name2" class="form-label">Enter Person2 Name</label>
                    <input type="text" class="form-control" id="name2" name="name2">
                </div>
                <div class="mb-3">
                    <label for="email2" class="form-label">Email Person2 address</label>
                    <input type="email" class="form-control" id="email2" name="email2" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="age2" class="form-label">Person2 Age</label>
                    <input type="number" class="form-control" id="age2" name="age2">
                </div>
                
                <div class="mb-3">
                    <legend>Person3 Info</legend>
                </div>

                <div class="mb-3">
                    <label for="name3" class="form-label">Enter Person3 Name</label>
                    <input type="text" class="form-control" id="name3" name="name3">
                </div>
                <div class="mb-3">
                    <label for="email3" class="form-label">Email Person3 address</label>
                    <input type="email" class="form-control" id="email3" name="email3" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="age3" class="form-label">Person3 Age</label>
                    <input type="number" class="form-control" id="age3" name="age3">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>