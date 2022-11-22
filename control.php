<?php
session_start();
include('db.php');

  if(!(isset($_SESSION["id"]) == "OK")) {
    header("Location: index.php");
    exit;
}


?>