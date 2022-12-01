<?php

$verzend1 = 7.5;
$verzend2 = 5;





?>

<!DOCTYPE html>
<html lang="nl">


<head>
<meta http-equiv="Content-Type"
        content="text/html;
        charset=UTF-8" />
    <style>
        .plaatje{
            position: absolute;
            height: 400px;
            width: auto;
            border: 6px solid #c3c3c3;
            top: 20%;
            left: 4.7%;
            margin: auto;
            padding: 1px;
        }
        .infotext{
            font-size: 150%;
            font-family: monospace;
            top: 20%;
            position: absolute;
            left: 25%;
            background-color: #c3c3c3;

        }
        </style>

    </head>
    <body style="position: absolute; top:7%; left: 4,7%; width: 99.3%; height: 60%;">
    <!--img-->
        <div>
        <img class="plaatje" src="bierplaatje.png" alt="bier">
        </div>
    <!--info-->
        <div>
        <h1 class="infotext">  - "Speciaal bier" - prijs per flesje - &euro;2,50 -<br><br>- Het verzendtarief voor dit product is &euro;7,50 tot bestellingen van &euro;25,00-
        <br><br>- Voor bestellingen over dit bedrag daalt dit bedrag naar &euro;5,00- <br><br>- Er mogen maximaal 24 flesjes per bestelling worden gekocht. -</h1>
        </div>
    
    
        <form name="form1" action="" method="POST" style="position: absolute; left: 27%; top: 62%; font-family: monospace; font-size: 16px;">
        Kies een aantal: <br>

    <!--aantal-->
    
        <input required type="number" max="24" min="1" id="aantal" onchange="totaal()"
        name="aantal" placeholder="aantal" />

        

            <div style="position: absolute; left:26%; top: 2%;">
            <p>totaal:&euro;</p>
            </div>
            <div style="position: absolute; left: 55%; top: 2%;">
                    <p id="demo"></p>

        <script>
        function totaal() {
            
        var x = document.getElementById("aantal").value;
        if (x < 10)
        document.getElementById("demo").innerHTML = x * 2.5 + 7.5;
        else
        document.getElementById("demo").innerHTML = x *2.5 + 5;
        }
        </script>

        </div>
 
        <br><br>Vul de volgende gegevens in:<br>
    <!--email-->
        
        <input required type="email" 
        name="email" placeholder="E-mail adres..." />
        <br>
    <!--straat-->
        
        <input required type="text"  style="width: 124px"                             
        name="straat" placeholder="Straatnaam..." />
        <input required type="number" min="1" style="width: 30px; left: 53.7%; position: absolute;" 
        name="huisnummer" placeholder="nr." />
        <br>
    <!--postcode-->
        
        <input required type="text" 
        name="postcode" placeholder="Postcode..." />
        <br>
    <!--plaats-->

        <input required type="text" 
        name="woonplaats" placeholder="Plaatsnaam..." />
    <!--bestel-->
        <br>
        <br>
        <input type="submit" name="bestel">
        </form>
    </body>
</html>

<?php

include('db.php');



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $insert = $conn->query("
    INSERT INTO
    test1
    (
    aantal,
    email,
    straat,
    huisnummer,
    postcode,
    woonplaats
    ) VALUES
    (
    '".$conn->real_escape_string($_POST['aantal'])."',
    '".$conn->real_escape_string($_POST['email'])."',
    '".$conn->real_escape_string($_POST['straat'])."',
    '".$conn->real_escape_string($_POST['huisnummer'])."',
    '".$conn->real_escape_string($_POST['postcode'])."',
    '".$conn->real_escape_string($_POST['woonplaats'])."'
    )
    ");

    header("Location: makepdf.php?email=" . $_POST['email'] . "&aantal=" . $_POST['aantal'] . "&straat=" . $_POST['straat'] . "&huisnummer=" . $_POST['huisnummer'] . "&postcode=" . $_POST['postcode'] . "&woonplaats=" . $_POST['woonplaats'] );
    
}
?>