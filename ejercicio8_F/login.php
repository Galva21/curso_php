<?php 
session_start();
if ($_POST) {
    if (($_POST['user']=="galva") && ($_POST['password']=="admin")) {
        $_SESSION['login']="true";
        header('location:index.php');
    }else{
        echo "<script>alert('Incorrect user or password');</script>";
        $_SESSION['login']="false";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            User: <input type="text" name="user" class="form-control">
                            <br />
                            Password: <input type="password" name="password" class="form-control">
                            <br />
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>

</html>