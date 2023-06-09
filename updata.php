<?php

    require_once "connect.php";

    $password=$_POST['password'];
        $copassword=$_POST['copassword'];
        $email=$_POST['email'];
        // $id=$_GET['id'];

      echo  $query="UPDATE `sign_up` SET `password`='$password',`copassword`='$copassword' WHERE `email`='$email'" ;
        $result=mysqli_query($conn,$query) or die(" resutl erorr... ") ;

        if ($result == 1) {

            // header("Location:login.php");

        } else {

            echo " EORR.....";

        }


    // if(isset($_POST['pass'])){

        // $password=$_POST['password'];
        // $copassword=$_POST['copassword'];
        // $id=$_GET['id'];

        // $query="UPDATE `sign_up` SET `password`='$password',`copassword`='$copassword' WHERE `id`='$id'" ;
        // $result=mysqli_query($conn,$query) or die(" resutl erorr... ") ;
        // $data=mysqli_fetch_assoc($result);

        // if ($result == 1) {

        //     // header("Location:login.php");

        // } else {

        //     echo " EORR.....";

        // }

    // }
    //     if(mysqli_num_rows($result)>0){

    //         $_SESSION['email']=$data['email'];
    //         $_SESSION['id']=$data['id'];
    //         header("location:password.php");

    //     }else{

    //         echo "Invalid Email ";

    //     }

    // }

?>