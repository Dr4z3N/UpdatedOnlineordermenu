<?php
    session_start();
    $h=$_POST['211'];

    $_SESSION['j211']=$h;

    header('Location:foods.php');
