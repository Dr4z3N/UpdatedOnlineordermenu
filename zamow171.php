<?php
    session_start();
    $h=$_POST['17'];

    $_SESSION['j17']=$h;

    header('Location:foods.php');
