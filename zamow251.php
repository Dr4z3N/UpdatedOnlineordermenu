<?php
    session_start();
    $h=$_POST['25'];

    $_SESSION['j25']=$h;

    header('Location:foods.php');
