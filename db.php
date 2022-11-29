<?php
$conn = new mysqli('localhost','root','','bierverkoop');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}