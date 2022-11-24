<?php
    session_start();
    $h=$_POST['18'];

    $_SESSION['j18']=$h;

    header('Location:foods.php');
