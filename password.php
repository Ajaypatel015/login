<?php

require_once "connect.php";

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
        <h2 class="title"> New Password</h2>
        <form class="form" method="POST" action="updata.php">
            
            <label for="password">Password</label>
            <input type="text" id="password" name="password" class="input" autocomplete="off" placeholder="Enter New Password" required />

            <label for="password">Conform Password</label>
            <input type="text" id="password" name="copassword" class="input" autocomplete="off" placeholder="Enter Conform Password" required />

            <button type="submit" name="pass" class="btn btn-success"><a href="login.php">Submit</a></button>



        </form>


</body>

</html>