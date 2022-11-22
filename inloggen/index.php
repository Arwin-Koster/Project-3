<!DOCTYPE html>
<form method="POST">
    <input type="email" name="email" required placeholder="bij@voorbeeld.com">
    <input type="password" name="password" required placeholder="wachtwoord">
    <input type="submit" name="submit"> 
</form>

<?php

$conn = new mysqli('localhost','root','','bierverkoop');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(strlen($_POST['password']) < 0){
        $password_error = "password needs to be longer than 6 characters";
    }

    $query = $conn->query("SELECT * FROM users WHERE email = '".$conn->real_escape_string($_POST['email'])."'");

if($query->num_rows == 1){
    $row = mysqli_fetch_array($query);
    if($_POST['password'] == $row['wachtwoord'])  {
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['wachtwoord'];
       // header("Location: dashboard.php");
     if($row['id'] == 1){
        header("location: dashboard.php");
    } else{
        header("location: ondernemer.php");
    }
}
    else {

    $error_message = "Incorrect name or Password!!!";
    
}
}
}
