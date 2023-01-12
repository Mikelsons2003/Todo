<?php
include 'db.php';
include "../models/dbOperations.php";

if(isset($_POST)){
$text = $_POST['text'];

if(!empty($text)){
$sql = "INSERT INTO todoList (`text`) VALUES ('$text')"; 
$result = insert($sql, $conn);
    if($result === TRUE) {
        $result = "Dati ir pievienoti veiksmigi!";
    }else{
        $result = "Dati netika pievienoti";
}
} else {
    echo "";
}
}