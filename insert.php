<?php

$tempname = $_FILES['image']['tmp_name'];
$target_folder = "image";
$target_filename = $_FILES['image']['name'];
$target_filesize = $_FILES['image']['size'];
$target_fileerror = $_FILES['image']['error'];
$target_filetype = $_FILES['image']['type'];

$target_file = $target_folder . "/" . basename($target_filename);

if ($target_fileerror == 0) {

    $file_status = move_uploaded_file($tempname, $target_file);
}


    require_once "connect.php";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $copassword=$_POST['copassword'];
    $image = $_FILES['image']['name'];

    $query="INSERT INTO `sign_up`(`image`,`name`, `email`, `password`, `copassword`) VALUES ('$image','$name','$email','$password','$copassword') ";
    $result=mysqli_query($conn,$query);

    if($result){

        echo "data is saved";

    }else{

        echo "ERORR....";

    }

?>