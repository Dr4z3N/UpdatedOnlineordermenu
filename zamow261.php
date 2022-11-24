<?php
    session_start();
    $h=$_POST['26'];

    $_SESSION['j26']=$h;

    header('Location:foods.php');
