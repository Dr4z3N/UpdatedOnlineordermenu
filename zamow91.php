<?php
    session_start();
    $h=$_POST['9'];

    $_SESSION['j9']=$h;

    header('Location:foods.php');
