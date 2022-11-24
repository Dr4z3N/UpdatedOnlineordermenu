<?php
    session_start();
    $h=$_POST['15'];

    $_SESSION['j15']=$h;

    header('Location:foods.php');
