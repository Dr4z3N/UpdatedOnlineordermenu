<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'onlinefood-order');
    $order_date = date("Y-m-d h:i:sa");
    $status = "Ordered";
    $nazwisko = $_POST['nazwisko'];
    $customer_contact= $_POST['telefon'];
    $customer_email= $_POST['email'];
    $adres = $_POST['adres'];
    if(isset($_SESSION['j4'])){
        $h=$_SESSION['j4'];
        $sql4 = "INSERT INTO tbl_order SET 
            food = 'Buuurgerrek',
            price = 12.00,
            qty = $h,
            total = 12.00*$h,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql4);
    }
    if(isset($_SESSION['j5'])){
        $p=$_SESSION['j5'];
        $sql5 = "INSERT INTO tbl_order SET 
            food = 'Pizza jakaś',
            price = 30.00,
            qty = $p,
            total = 30.00*$p,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql5);
    }
    if(isset($_SESSION['j9'])){
        $t=$_SESSION['j9'];
        $sql9 = "INSERT INTO tbl_order SET 
            food = 'Twister',
            price = 20.00,
            qty = $t,
            total = 20.00*$t,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql9);
    }
    if(isset($_SESSION['j10'])){
        $j=$_SESSION['j10'];
        $sql10 = "INSERT INTO tbl_order SET 
            food = 'Jakis Kolejny Burger',
            price = 16.00,
            qty = $j,
            total = 16.00*$j,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql10);
    }
    if(isset($_SESSION['j11'])){
        $q=$_SESSION['j11'];
        $sql11 = "INSERT INTO tbl_order SET 
            food = 'Quritto',
            price = 25.00,
            qty = $q,
            total = 25.00*$q,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql11);
    }
    if(isset($_SESSION['j12'])){
        $ps=$_SESSION['j12'];
        $sql12 = "INSERT INTO tbl_order SET 
            food = 'Pizza z salami',
            price = 25.00,
            qty = $ps,
            total = 25.00*$ps,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql12);
    }
    if(isset($_SESSION['j13'])){
        $aw=$_SESSION['j13'];
        $sql13 = "INSERT INTO tbl_order SET 
            food = 'Amarena wiśniowa',
            price = 6.00,
            qty = $aw,
            total = 6.00*$aw,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql13);
    }
    if(isset($_SESSION['j14'])){
        $ab=$_SESSION['j14'];
        $sql14 = "INSERT INTO tbl_order SET 
            food = 'Amarena brzoskwiniowa',
            price = 6.00,
            qty = $ab,
            total = 6.00*$ab,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql14);
    }
    if(isset($_SESSION['j15'])){
        $s=$_SESSION['j15'];
        $sql15 = "INSERT INTO tbl_order SET 
            food = 'Śliwowica',
            price = 20.00,
            qty = $s,
            total = 20.00*$s,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql15);
    }
    if(isset($_SESSION['j16'])){
        $cr=$_SESSION['j16'];
        $sql16 = "INSERT INTO tbl_order SET 
            food = 'Carlo Rossi',
            price = 20.00,
            qty = $cr,
            total = 20.00*$cr,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql16);
    }
    if(isset($_SESSION['j17'])){
        $sm=$_SESSION['j17'];
        $sql17 = "INSERT INTO tbl_order SET 
            food = 'Soplica morelowa',
            price = 35.00,
            qty = $sm,
            total = 35.00*$sm,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql17);
    }
    $zb=$_SESSION['j18'];
    if(isset($_SESSION['j19'])){
        $pr=$_SESSION['j19'];
        $sql19 = "INSERT INTO tbl_order SET 
            food = 'Piwo Robotnika',
            price = 4.00,
            qty = $pr,
            total = 4.00*$pr,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql19);
    }
    if(isset($_SESSION['j20'])){
        $h=$_SESSION['j20'];
        $sql20 = "INSERT INTO tbl_order SET 
            food = 'Harnold',
            price = 3.00,
            qty = $h,
            total = 3.00*$h,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql20);
    }
    if(isset($_SESSION['j21'])){
        $zu=$_SESSION['j21'];
        $sql21 = "INSERT INTO tbl_order SET 
        food = 'Żubr',
        price = 4.00,
        qty = $q,
        total = 4.00*$q,
        order_date = '$order_date',
        status = '$status',
        customer_name = '$nazwisko',
        customer_contact = '$customer_contact',
        customer_email = '$customer_email',
        customer_address = '$adres'";
        mysqli_query($conn, $sql21);
    }
    if(isset($_SESSION['j22'])){
        $ru=$_SESSION['j22'];
        $sql22 = "INSERT INTO tbl_order SET 
            food = 'Ruskacz',
            price = 10.00,
            qty = $ru,
            total = 10.00*$ru,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql22);
    }
    if(isset($_SESSION['j23'])){
        $pr=$_SESSION['j23'];
        $sql23 = "INSERT INTO tbl_order SET 
            food = 'Pizza robotnika',
            price = 30.00,
            qty = $pr,
            total = 30.00*$pr,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql23);
    }
    if(isset($_SESSION['j24'])){
    $pd=$_SESSION['j24'];
    $sql24 = "INSERT INTO tbl_order SET 
            food = 'Pizza diabła',
            price = 999.00,
            qty = $pd,
            total = 999.00*$pd,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql24);
    }
    if(isset($_SESSION['j25'])){
    $pc=$_SESSION['j25'];
    $sql25 = "INSERT INTO tbl_order SET 
            food = 'Pizza z chwastem',
            price = 25.00,
            qty = $pc,
            total = 25.00*$pc,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql25);
    }
    if(isset($_SESSION['j26'])){
    $sg=$_SESSION['j26'];
    $sql26 = "INSERT INTO tbl_order SET 
            food = 'Sałatka grecka',
            price = 17.00,
            qty = $sg,
            total = 17.00*$sg,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql26);
    }
    if(isset($_SESSION['j27'])){
    $sk=$_SESSION['j27'];
    $sql27 = "INSERT INTO tbl_order SET 
            food = 'Sałatka z krewetka',
            price = 17.00,
            qty = $sk,
            total = 19.00*$sk,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql27);
    }
    if(isset($_SESSION['j28'])){
    $sr=$_SESSION['j28'];
    $sql28 = "INSERT INTO tbl_order SET 
            food = 'Pizza z rukolą',
            price = 17.00,
            qty = $sr,
            total = 17.00*$sr,
            order_date = '$order_date',
            status = '$status',
            customer_name = '$nazwisko',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$adres'";
            mysqli_query($conn, $sql28);
    }


    session_unset();
    mysqli_close($conn);

    header('Location: index.php');