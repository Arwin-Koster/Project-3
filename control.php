<?php
session_start();
include('db.php');

  if($_SESSION['loggin'] != true) {
    header("Location: index.php?error");
    exit;
  }


?>