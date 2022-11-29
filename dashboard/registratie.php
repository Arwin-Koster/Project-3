<?php
include('db.php');
include('control.php');
include('navbar.php');
?>
<!DOCTYPE html>

<a class="uitloggen" href="uitloggen.php">uitloggen</a>
<form class="registratie" method="POST">
    <p>registreren</p>
    <input type="email" name="email" required placeholder="bij@voorbeeld.com">
    <input type="password" name="password" required placeholder="wachtwoord">
    <input type="submit" name="submit">
</form>

<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $insert = $conn->query("
    INSERT INTO
    users
    (
    email,
    wachtwoord
    ) VALUES
    (
    '".$conn->real_escape_string($_POST['email'])."',
    '".$conn->real_escape_string($_POST['password'])."'
    )
    ");
}
?>

<br><br><br><br><br><br><br>
<p> account overzicht</p>
<?php
 $query2 = "SELECT * FROM `users`;";
$result2 = mysqli_query($conn, $query2);
echo '<div class="OutputClass" >';
//echo $output;
echo '<center>';
//echo $output;
    if ($result2->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result2->fetch_assoc())
        {
            
        
            echo
                 "email:" . $row["email"].
                 " | wachtwoord: " . $row["wachtwoord"].
                 "<br>";
            
        }
    } 
    else {
        echo "0 results";
    }
    echo '<center>';
    echo '</div>';
    ?>


<style>
    .uitloggen{
    margin: auto;
    font-size: 22px;
    color: #fff;
    background-color: black;
    border-radius: 10px;
    border: gray solid 3px;
    padding: 6px;
    float: right;
    }
    a{
    text-align: center;
    color: black;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 1.2vw;
    margin-bottom: -16px;
}
a:hover{
color: red;
transition: 0.5s;
}
.registratie{
    position: center;

}

</style>