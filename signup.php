
<?php
include '/partials/db_connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php require 'partials/navbar.php' ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <h1 class="text-center">Welcome to sign up...!</h1>
    <div class="container" class="col-md-6 mx-auto" style="max-width: 500px;" >
    <form action="/form/sgnup.php" method="POST" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
        </div>
        <div class="mb-3" >
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">confirm password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
       
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

</html>