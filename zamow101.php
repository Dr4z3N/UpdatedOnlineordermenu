<?php
    session_start();
    $h=$_POST['10'];

    $_SESSION['j10']=$h;

    header('Location:foods.php');
