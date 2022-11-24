<?php
    session_start();
    $h=$_POST['20'];

    $_SESSION['j20']=$h;

    header('Location:foods.php');
