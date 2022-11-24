<?php
    session_start();
    $h=$_POST['14'];

    $_SESSION['j14']=$h;

    header('Location:foods.php');
