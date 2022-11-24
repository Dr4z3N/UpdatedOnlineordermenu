<?php
    session_start();
    $h=$_POST['24'];

    $_SESSION['j24']=$h;

    header('Location:foods.php');
