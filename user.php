<?php

    require_once "connect.php";

    if(isset($_POST['login'])){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $query="SELECT * FROM `sign_up`WHERE `name`='$name' AND `password`='$password'";
        $result =mysqli_query($conn,$query) or die("result erorr...");
        $data=mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){

            $_SESSION['name']=$data['name'];
            $_SESSION['password']=$data['password'];
            $_SESSION['id']=$data['id'];
            header("location:dashboard.php");

        }else{

            echo "Invalid Name and Password";

        }

    }

?>