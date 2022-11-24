<?php
    session_start();
    $h=$_POST['23'];

    $_SESSION['j23']=$h;

    header('Location:foods.php');
