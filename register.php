<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

include 'navbar.php';

?>

<div class="container">
    <div class="row">
        <div class="offset-2 col-md-8">
            <div class="card mt-4">
                <form action="" method="post">

                    <div class="card-header bg-dark">
                        <h2 class="text-center text-light">Register Here</h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">First name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Last name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email id</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Create password</label>
                            <input type="text" name="cpass" id="cpass" class="form-control">
                        </div>
                        <input type="submit" value="Register" name="btnRegister" class="btn btn-dark">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>


<?php

include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<script>alert('Data received')</script>";

}

?>
