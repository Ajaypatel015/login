<?php

    require_once "connect.php";

    if(!isset($_SESSION['name'])){
        
        header("location:logout.php");

    }

    echo " welcome ".$_SESSION['name'];

?>

<form action="logout.php">

    <input type="submit" value="Logout">

</form>