<?php

    require_once "connect.php";

    if(isset($_POST['om'])){

        $email=$_POST['email'];
        $query="SELECT * FROM `sign_up`WHERE `email`='$email' " ;
        $result=mysqli_query($conn,$query) or die(" resutl erorr... ") ;
        $data=mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){

            $_SESSION['email']=$data['email'];
            $_SESSION['id']=$data['id'];
            header("location:password.php");

        }else{

            echo "Invalid Email";

        }

    }

?>