<?php
    session_start();
    $h=$_POST['28'];

    $_SESSION['j28']=$h;

    header('Location:foods.php');
