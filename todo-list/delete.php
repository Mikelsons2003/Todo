<?php
include "db.php";

$id = $_GET['id'];
$sql = "DELETE FROM todoList WHERE id=" . $id;
$results = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    header("location: todo.php");
} else {
    echo "Error deleting record: " . $conn->error;
}