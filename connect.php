<?php

    session_start();

    $host="localhost";
    $database_name="login";
    $database_usname="root";
    $database_pass="";
    
    $conn = mysqli_connect($host,$database_usname,$database_pass,$database_name);

    // $conn=mysqli_connect($host,$database_usname,$database_pass,$database_name);
//     if($conn){

//        echo "connect success....";

//     }else{

//         echo "connect ERORR....";

//     }


?>