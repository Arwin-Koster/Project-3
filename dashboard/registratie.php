<?php
include('control.php')
?>
<!DOCTYPE html>
<form method="POST">
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