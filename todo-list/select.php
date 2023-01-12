<?php
include "db.php";
include "../models/dbOperations.php";

function login($conn){
    if(isset($_POST['login'])){
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE gmail = '$gmail'";
    $msg = select($sql,$conn);
    if($msg){
        while($row=$msg->fetch_assoc()){
            if($gmail == $row['gmail'] && password_verify($password , $row['password'])){
                $_SESSION['user'] = $row['id'];
                $_SESSION['logged'] = true;
                $users = $_SESSION['user'];
                    header("Location:todo-list/todo.php");
            }else{
                $users = "Parole vai Epasts nav pareizs, mēģini vēlreiz!";
            }
        }
    }else{
        $users = "Lietotājs neeksistē";
    }
    if(!empty($users)){
        echo $users;
    }
}
}
