<?php
  $host = 'localhost';
  $dbname = 'particulieren';
  $username = 'root';
  $password = '';

  $mysqli = new mysqli($host, $username, $password, $dbname);

  if ($mysqli->connect_error) {
    die("connection error: " . $mysqli->connect_error);
  }

  $conn = mysqli_connect($host, $username, $password, 'particulieren');

?>