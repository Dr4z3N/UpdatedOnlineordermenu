<?php
    session_start();
    $h=$_POST['12'];

    $_SESSION['j12']=$h;

    header('Location:foods.php');
