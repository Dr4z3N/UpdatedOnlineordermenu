<?php
    session_start();
    $h=$_POST['16'];

    $_SESSION['j16']=$h;

    header('Location:foods.php');
