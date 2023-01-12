<?php
session_start();
include "db.php";
include "../models/dbOperations.php";
include "select1.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style-todo.css">
  <script src="functions.js"></script>
  <title>Document</title>
</head>

<body>
<div class="container center">
    <div class="box">
      <div class="header">
        <form id="form">
          <h1 class="h1">Your ToDo List</h1>
          <input class="input" type="text" name="text" placeholder="Add Text..." id="text">
          <button onclick="getValue('insert1.php')" name="text" class="addBtn">Add</button>
          <p id="msg"></p>
          <div class="mg-t-10">
            <?php echo printSelected($conn); ?>
          </div>
        </form>
      </div>
    </div>
</div>

</body>

</html>