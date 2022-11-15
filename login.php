<?php
     error_reporting( E_ALL );
     ini_set('display_errors',1);
      ini_set('display_startup_errors',1);
      error_reporting(-1);
       session_start(); // Starting Session
       $error=''; // Variable To Store Error Message
       if (isset($_POST['submit'])) {
       if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";
    }
    else
    {
    // Define $username and $password
      $usr=$_POST['username'];
      $pwd=$_POST['password'];
     // Establishing Connection with Server by passing server_name, user_id  and password as a parameter
     $con = mysql_connect("localhost", "root", "", "bierverkoop") or die('Error Connecting to mysql server');
     // To protect MySQL injection for Security purpose
     $username = stripslashes($usr);
     $password = stripslashes($pwd);
     $username = mysql_real_escape_string($usr);
     $password = mysql_real_escape_string($pwd);
     // Selecting Database
     $db=mysql_select_db('bierverkoop',$con);

    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("select username, password from login where  password='$pwd' AND username='$usr'", $con) or die('Error querying database');
    $rows = mysql_num_rows($query);

    while ($rows = mysql_fetch_array($query)) {
    $_SESSION['Sl_no']=$rows['Sl_no'];
    if ($rows ==1)
    {

   // Initializing Session
   header("location: admin.php"); // Redirecting To Other Page
    }

   elseif ($rows==2)
   {
   header("location: branchadmin.php");
   }
   elseif($rows==3)
  {
  header("location: accountant.php");
  }
  elseif($rows==4)
 {
  header("location: reporter.php");
 }
 else
 {

 $error = "Username or Password is invalid";
 }
 }
 mysql_close($con); // Closing Connection
 }
 }
 ?>