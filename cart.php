
<?php include('partials-front/menu.php'); ?>
<link rel="stylesheet" href="css/cart.css">
    <h1>Twoje zamowienie</h1>
    <br>
    <form action="wstaw.php" method="POST">
        <ol><?php 
        if(isset($_SESSION['j4']))
            echo '<li>Hamburger: '.$_SESSION["j4"];
         ?>
        <?php 
        if(isset($_SESSION['j5']))
            echo '<li>Pizza: '.$_SESSION["j5"];
         ?>
        <?php 
        if(isset($_SESSION['j9']))
            echo '<li>Twister: '.$_SESSION["j9"];
         ?>
        <?php 
        if(isset($_SESSION['j10']))
            echo '<li>Jakis Kolejny Burger: '.$_SESSION["j10"];
         ?>
        <?php 
        if(isset($_SESSION['j11']))
            echo '<li>Qurito: '.$_SESSION["j11"];
         ?>
        <?php 
        if(isset($_SESSION['j12']))
            echo '<li>Pizza salami: '.$_SESSION["j12"];
         ?>
        <?php 
        if(isset($_SESSION['j13']))
            echo '<li>Amarena wiśniowa: '.$_SESSION["j13"];
         ?>
        <?php 
        if(isset($_SESSION['j14']))
            echo '<li>Amarena brzoskwiniowa: '.$_SESSION["j14"];
         ?>
        <?php 
        if(isset($_SESSION['j15']))
            echo '<li>Śliwowica: '.$_SESSION["j15"];
         ?>
        <?php 
        if(isset($_SESSION['j16']))
            echo '<li>Carlo Rossi: '.$_SESSION["j16"];
         ?>
        <?php 
        if(isset($_SESSION['j17']))
            echo '<li>Soplica morelowa: '.$_SESSION["j17"];
         ?>
        <?php 
        if(isset($_SESSION['j18']))
            echo '<li>Żurbówka białą: '.$_SESSION["j18"];
         ?>
        <?php 
        if(isset($_SESSION['j19']))
            echo '<li>Piwo Robotnika: '.$_SESSION["j19"];
         ?>
        <?php 
        if(isset($_SESSION['j20']))
            echo '<li>Harnold: '.$_SESSION["j20"];
         ?>
        <?php 
        if(isset($_SESSION['j22']))
            echo '<li>Ruskacz: '.$_SESSION["j22"];
         ?>
        <?php 
        if(isset($_SESSION['j23']))
            echo '<li>Pizza robotnicza: '.$_SESSION["j23"];
         ?>
        <?php 
        if(isset($_SESSION['j24']))
            echo '<li>Pizza diabła: '.$_SESSION["j24"];
         ?>
        <?php 
        if(isset($_SESSION['j25']))
            echo '<li>Pizza z chwastem: '.$_SESSION["j25"];
         ?>
        <?php 
        if(isset($_SESSION['j26']))
            echo '<li>Sałatka grecka: '.$_SESSION["j26"];
         ?>
        <?php 
        if(isset($_SESSION['j27']))
            echo '<li>Sałatka z krewatkami: '.$_SESSION["j27"];
         ?>
        <?php 
        if(isset($_SESSION['j28']))
            echo '<li>Sałatka z rukolą: '.$_SESSION["j28"];
         ?>
        </ol>
        <center>
        Nazwisko <br>
        <input type="text" name="nazwisko" id="nazwisko" placeholder="Nazwisko"> <br>
        Adres <br>
        <input type="text" name="adres" id="adres" placeholder="Adres"> <br>
        Telefon <br>
        <input type="text" name="telefon" id = "telefon" placeholder="Telefon" > <br>
        E mail <br>
        <input type="email" name="email" id="email" placeholder="Email"> <br>
        <br><br>
        <input type="submit" value="Potwierdz zamowienie">
        </center>
    </form>
    

    <?php include('partials-front/footer.php'); ?>