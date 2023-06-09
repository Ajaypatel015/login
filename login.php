<?php

    session_start();

    if(isset($_SESSION['name'])){

            header("location:dashboard.php");

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="pic">
            <i class="fas fa-user"></i>
        </div>
        <h2 class="title">Login</h2>
        <form class="form" method="POST" action="user.php">
            <label for="username">Name</label>
            <input type="text" id="username" name="name" class="input" autocomplete="off" placeholder="Enter Your Name" required />
           
            

            <label for="username">Password
                     <input type="password" name="password" id="password" class="input" autocomplete="off" placeholder="Enter Your Password" required />
                     <i class="bi bi-eye-slash" id="togglePassword"></i>
                 </label>
            
            <p>
                <a href="forget.php">forget password</a>
            </p>
            <button type="submit" name="login" class="btn btn-success">Login</button>

            

        </form>
        <br><br><p class="para-2">
             Already have an account? <a href="register.php">Sign UP here</a>
        </p>
    </div>

    <script>

   

    const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        
           
         </script>

</body>

</html>