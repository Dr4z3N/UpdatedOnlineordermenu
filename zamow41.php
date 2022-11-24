<?php
    session_start();
    $h=$_POST['4'];

    $_SESSION['j4']=$h;

    header('Location:foods.php');

