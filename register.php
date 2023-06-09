 <?php

    require_once "connect.php";

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Sign Up | By Code Info</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="login.css">


 </head>

 <body>
     <center>
         <div class="fox">
             <h1>Sign Up</h1>


             <form action="insert.php" method="POST" enctype="multipart/form-data">


                 <div class="logo" id="logo">
                     <img src="image/pp.jpg" alt="">
                     <input type="file" name="image" id="img">

                 </div>

                 <!-- <div class="logo" id="logo">
                     <img name="image" src="image/pp.jpg" alt="">
                     <input type="file" id="img">

                 </div> -->

                 <label for="username">Name</label>
                 <input type="text" name="name" id="name" class="input" autocomplete="off" placeholder="Enter Your Name" required /><br>

                 <label for="username">Email</label>
                 <input type="text" name="email" id="email" class="input" autocomplete="off" placeholder="Enter Your Email" required /><br>

                 <label for="username">Password
                     <input type="password" name="password" id="password" class="input" autocomplete="off" placeholder="Enter Your Password" required />
                     <i class="bi bi-eye-slash" id="togglePassword"></i>
                 </label>
                 <br>
                 <label for="username">Conform Password</label>
                 <input type="password" name="copassword" id="copassword" class="input" autocomplete="off" placeholder="Enter Your Conform Password" />
                 <i class="bi bi-eye-slash" id="soul"></i>

                 <br><br>
                 <p id="message"></p>
                 <button type="submit" class="btn btn-success btn-block" onclick="checkPassword()">Sign UP</button>



             </form>

             <p class="para-2">
                 Already have an account? <a href="login.php">Login here</a>
             </p>


         </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         <script>
             const image = document.querySelector("img"),
                 input = document.querySelector("input");

             input.addEventListener("change", () => {
                 image.src = URL.createObjectURL(input.files[0]);
             });


             var imageinput = document.getElementById("img");

             var logo = document.getElementById("logo");
             logo.addEventListener("click", () => {

                 imageinput.click()
             });



             const togglePassword = document.querySelector("#togglePassword");
             const password = document.querySelector("#password");

             togglePassword.addEventListener("click", function() {
                 // toggle the type attribute
                 const type = password.getAttribute("type") === "password" ? "text" : "password";
                 password.setAttribute("type", type);

                 // toggle the icon
                 this.classList.toggle("bi-eye");
             });

             // prevent form submit
             // const form = document.querySelector("form");
             // form.addEventListener('submit', function(e) {
             //     e.preventDefault();
             // });


             const soul = document.querySelector("#soul");
             const copassword = document.querySelector("#copassword");

             soul.addEventListener("click", function() {
                 // toggle the type attribute
                 const type = copassword.getAttribute("type") === "password" ? "text" : "password";
                 copassword.setAttribute("type", type);

                 // toggle the icon
                 this.classList.toggle("bi-eye");
             });


             function checkPassword() {
                 let password = document.getElementById("password").value;
                 let copassword = document.getElementById("copassword").value;
                 console.log(" Password:", password, '\n', "Confirm Password:", copassword);
                 let message = document.getElementById("message");

                 if (password.length != 0) {
                     if (password == copassword) {
                         message.textContent = "Passwords match";
                         message.style.backgroundColor = "#1dcd59";
                     } else {
                         message.textContent = "Password don't match";
                         message.style.backgroundColor = "#ff4d4d";
                     }
                 } else {
                     alert("Password can't be empty!");
                     message.textContent = "";
                 }
             }
         </script>

 </body>

 </html>