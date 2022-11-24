<?php
    session_start();
    $h=$_POST['13'];

    $_SESSION['j13']=$h;

    header('Location:foods.php');
