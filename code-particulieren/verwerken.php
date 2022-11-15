<?php  

$verzend1 = 7.50;
$verzend2 = 5;

echo "Bedankt voor uw bestelling, er is een bericht gestuurd naar ";
print_r($_POST["email"]);
echo " voor verdere informatie. <br>";

require __DIR__ . "/database.php";  

?>

<!DOCTYPE html>
<html>
    <head>
    <?php
    
    $aantal = $_POST['aantal']; 
    
    if ($aantal < 10) {
    echo "Uw totale bedrag is €";
    print_r($aantal * 2.50 + $verzend1);
    }
    elseif ($aantal > 10) {
        echo "Uw totale bedrag is €";
        print_r($aantal * 2.50 + $verzend2);
    }
        ?>
        <div>
        <a href="./particulier.php"> Terug naar bestelpagina </a> 
</div>
    </head>

    </html>

