<?php
$conn = new mysqli('localhost','root','','particulieren');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}