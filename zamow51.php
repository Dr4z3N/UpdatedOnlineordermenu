<?php
    session_start();
    $h=$_POST['5'];

    $_SESSION['j5']=$h;

    header('Location:foods.php');

