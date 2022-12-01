

<?php

ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

//variabelen


$verzend1 = 7.50;
$verzend2 = 5;


$mpdf = new \Mpdf\Mpdf();


//maak pdf
$data = '';


$data .= '<h1> Uw bestelling en gegevens: </h1>';

$data .= '<strong>Aantal:</strong>' . $_GET['aantal'] . '<br />';

if ($_GET['aantal'] < 10) {
    $data .= '<strong>Totale prijs: &euro;</strong>' . number_format((float)$_GET['aantal'] * 2.50 + $verzend1, 2, '.', '');'<br />';
    }elseif ($_GET['aantal'] > 9) {
        $data .= '<strong> Totale prijs: &euro; </strong>' . number_format((float)$_GET['aantal'] * 2.50 + $verzend2, 2, '.', '');'<br />';
    };    
   
$data .= '<br /><strong>Email:</strong>' . $_GET['email'] . '<br />';

$data .= '<strong>Straat en huisnummer:</strong>' . $_GET['straat'] . $_GET['huisnummer'] . '<br />';

$data .= '<strong>Plaats:</strong>' . $_GET['woonplaats'] . '<br />';

$data .= '<strong>Postcode:</strong>' . $_GET['postcode'] . '<br />';



$mpdf->WriteHTML($data);

$pdf = $mpdf->output('', 'S');



$gegevens = [
    'email' => $_GET['email'],
    'aantal' => $_GET['aantal'],
    'straat' => $_GET['straat'],
    'huisnummer' => $_GET['huisnummer'],
    'woonplaats' => $_GET['woonplaats'],
    'postcode' => $_GET['postcode']
];


sendEmail($pdf, $gegevens);


function sendEmail($pdf, $gegevens)
{



    //$email = $_GET['email'];
    //$aantal = $_GET['aantal'];
    //$postcode = $_GET['postcode'];
    //$straat = $_GET['straat'];
    //$woonplaats = $_GET['woonplaats'];
    //$huisnummer = $_GET['huisnummer'];
    $verzend1 = 7.50;
    $verzend2 = 5;
    

    $emailbody = '';

    $emailbody .= '<h1> Uw bestelling en gegevens: </h1>';

    $emailbody .= '<strong>Aantal:</strong>' . $_GET['aantal'] . '<br />';
    
    if ($_GET['aantal'] < 10) {
        $emailbody .= '<strong>Totale prijs: &euro;</strong>' . number_format((float)$_GET['aantal'] * 2.50 + $verzend1, 2, '.', '');'<br />';
        }elseif ($_GET['aantal'] > 9) {
            $emailbody .= '<strong> Totale prijs: &euro;</strong>' . number_format((float)$_GET['aantal'] * 2.50 + $verzend2, 2, '.', '');'<br />';
        };    
    
    $emailbody .= '<br /><strong>Email:</strong>' . $_GET['email'] . '<br />';
    
    $emailbody .= '<strong>Straat en huisnummer:</strong>' . $_GET['straat']  . $_GET['huisnummer'] . '<br />';
    
    $emailbody .= '<strong>Plaats:</strong>' . $_GET['woonplaats'] . '<br />';
    
    $emailbody .= '<strong>Postcode:</strong>' . $_GET['postcode'] . '<br />';

    $emailbody .= '<p>Als deze gegevens niet kloppen of u wilt deze bestelling annuleren, <br> dan kunt u met ons contact opnemen via 06 12345678. </p>';





    $mail = new PHPMailer(true);    
try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '63753594122260';                     //SMTP username
    $mail->Password   = '20a91b3d83e491';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('test@mail.com', 'testmail');
    $mail->addAddress($_GET['email'], '');     //Add a recipient

    //bijlage
    $mail->addStringAttachment($pdf, 'Bier_bestelling_gegevens.pdf');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Bier aankoop gegevens';
    $mail->Body    = $emailbody;
    $mail->AltBody = strip_tags($emailbody);

    $mail->send();

    $email = $_GET['email'];

echo "<p> Er is een bericht gestuurd naar $email met de gegevens van uw bestelling.  </p><br /><a href='./particulier.php' style='color: -webkit-link;'> Terug naar bestelpagina </a> ";

} catch (Exception $e) {
    echo 'Mail kon niet verzonden worden, probeer contact met ons op te nemen via 06 12345678.  ', $mail->ErrorInfo;
}
}


?>