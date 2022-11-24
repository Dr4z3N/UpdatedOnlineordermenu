<?php
    session_start();
    $h=$_POST['27'];

    $_SESSION['j27']=$h;

    header('Location:foods.php');
