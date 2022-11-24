<?php
    session_start();
    $h=$_POST['19'];

    $_SESSION['j19']=$h;

    header('Location:foods.php');
