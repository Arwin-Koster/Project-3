<!DOCTYPE html>
    <?php 
include("db.php");
include("control.php");
include('navbar.php');

$query = "SELECT * FROM `particulier-order`";
    echo
    "<td>".$order['naam']."</td>".
    "<td>".$order['straatnaam']."</td>".
    "<td>".$order['postcode']."</td>".
    "<td>".$order['aantal']."</td>".
    "<td><a style='text-decoration: none'
    href='bestelling.php'".
    $order['ID']."'>&#9989;</a></td>'".
    ?>