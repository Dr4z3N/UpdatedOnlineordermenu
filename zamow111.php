<?php
    session_start();
    $h=$_POST['11'];

    $_SESSION['j11']=$h;

    header('Location:foods.php');
