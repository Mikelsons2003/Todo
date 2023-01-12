<?php
$host = 'localhost';
$user = 'skolnieks';
$pass = 'pQcM10ClEn3lSWy';
$dbName = 'miks_mikelsons';

$conn = new mysqli($host, $user, $pass, $dbName);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>