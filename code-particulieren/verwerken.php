<?php  

$verzend1 = 7.5;
$verzend2 = 5;
$email = $_POST['email'];
$receiver = $_POST['email'];
$subject = "Bier aankoop informatie";
$body = "Uw heeft zojuist flesjes bier gekocht.";
$sender = "From:jeltemetselaar@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    echo "Bedankt voor uw bestelling, er is een bericht gestuurd naar";
    print_r($_POST["email"]);   
    echo  " voor verdere informatie. <br>";
}else{
    echo " Helaas is het sturen van de mail niet gelukt, probeer contact op te nemen met het bedrijf via 06 12345678.<br>";
}
     
require __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html>
    <!--calculatie-->
    <head>

    <?php
    
    $aantal = $_POST['aantal']; 
    
    if ($aantal < 10) {
    echo "Uw totale bedrag is €";
    echo number_format((float)$aantal * 2.50 + $verzend1, 2, '.', '');

    }
    elseif ($aantal >= 10) {
        echo "Uw totale bedrag is €";
        echo number_format((float)$aantal * 2.50 + $verzend2, 2, '.', '');
    }

        ?>
        <div>
        <a href="./particulier.php" style="color: -webkit-link;"> Terug naar bestelpagina </a> 
    </div>
    </head>

    </html>

