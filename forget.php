<?php

session_start();

    if(isset($_SESSION['email'])){
    //    header("location:password.php");

    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>

<body>

    <div class="container">
        <div class="pic">
            <i class="fas fa-user"></i>
        </div>
        <h2 class="title">Forget Password</h2>
        <form class="form" method="POST" action="select.php">
            <label for="username">Email</label>
            <input type="text" id="username" name="email" class="input" autocomplete="off" placeholder="Enter Register Email" required /><br>
            <!-- <label for="password">Password</label>
            <input type="text" id="password" class="input" autocomplete="off" placeholder="Enter Email password" required /><br> -->

            <button type="submit" name="om" class="btn btn-success">Submit</a></button>



        </form>
        <br><br>
        <p class="para-2">
            Already have an account? <a href="register.php">Sign UP here</a>
        </p>
    </div>

</body>

</html>