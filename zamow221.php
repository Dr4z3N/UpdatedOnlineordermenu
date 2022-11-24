<?php
    session_start();
    $h=$_POST['22'];

    $_SESSION['j22']=$h;

    header('Location:foods.php');
