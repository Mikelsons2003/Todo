<?php
include 'db.php';
include "../models/dbOperations.php";

// Select Insert for register

$username = $_POST['username'];
$vards = $_POST['vards'];
$uzvards = $_POST['uzvards'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

if(!empty ($username)){
    if(!empty ($vards)){
        if(!empty ($uzvards)){
            if(!empty ($gmail)){
                if(!empty ($password)){

if($password == $repeatpassword) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = select($sql, $conn);
    if($result) {
        echo "user exists!";
    } else {
        $sql = "INSERT INTO users(`username`, vards, uzvards, gmail, `password`)
        VALUES ('$username', '$vards', '$uzvards', '$gmail', '$password')";
    
                $text = insert($sql, $conn);
                if ($text === TRUE) {
                    echo "Veiksmigi izveidots lietotajs.";
                } else {
                    echo "Kluda! Neizdavas izveidot.";
                }
            }
                } else {
                    echo "incorect password!";
                }
                } else {
                echo "nav ievadīta parole";
                } 
            } else {
                echo "nav ievadīts gmail";
            }
        } else {
            echo "nav ievadīta uzvards";
        }            
    } else {
        echo "nav ievadīta vards";
    }   
} else {
    echo "kāds lauciņš ir plaicis neievadīts";
}
