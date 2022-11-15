    <?php
    

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
        .prijs{
            background-color: white;
            width: 100px;
            height: 100px;
            border: 5px solid #c3c3c3;
            position: absolute;
            left: 50%;
            top: 65%;
            
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
        <h1 class="infotext">  - "Speciaal bier" - prijs per flesje - &euro;2,50 -<br><br>- Het verzendtarief voor dit product is &euro;7,50 tot bestellingen van &euro;25,-
        <br><br>- Voor bestellingen over dit bedrag daalt dit bedrag naar &euro;5,- <br><br>- Er mogen maximaal 24 flesjes per bestelling worden gekocht. -</h1>
        </div>
    
    
        <form name="form1" action="verwerken.php" method="post" style="position: absolute; left: 27%; top: 62%; font-family: monospace; font-size: 16px;">
        Kies een aantal: <br>

    <!--aantal-->
        <input required type="number" max="24" min="1" id="aantal"  
        name="aantal" placeholder="aantal" />
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
        name="plaatsnaam" placeholder="Plaatsnaam..." />
    <!--bestel-->
        <br>
        <br>
        <input type="submit" name="bestel">
        </form>
    </body>
</html>
