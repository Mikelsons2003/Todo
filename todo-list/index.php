<?php
session_start();
include "db.php";
include "../models/dbOperations.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="center container col">
    <div class="loginbox center col">
      <form id="form">
        <div id="myDIV" style="display:none">
          <h1>Pieslēgties</h1>
          <input type="text" name="user" placeholder="example@gmail.com" class="lietotajs">
          <input type="password" name="logged" placeholder="Parole..." class="lietotajs">
          <button onclick="getValue('select.php')" name="login" class="button">Login</button>
        </div>
        <div id="myDIVs" style="display:block">
          <h1>Reģistrēties</h1>
          <input type="text" name="username" placeholder="Lietotājvārds..." id="username" class="lietotajs">
          <input type="text" name="vards" placeholder="Vārds...." id="vards" class="lietotajs">
          <input type="text" name="uzvards" placeholder="Uzvārds..." id="uzvards" class="lietotajs">
          <input type="text" name="gmail" placeholder="Ē-Pasts...." id="gmail" class="lietotajs">
          <input type="password" name="password" placeholder="Parole...." id="password" class="lietotajs">
          <input type="password" name="repeatpassword" placeholder="Atkartoti parole...." id="repeatpassword" class="lietotajs">
          <button onclick="getValue('insert.php')" class="button">Register</button>
        </div>
        <button id="btn" onclick="myFunction()" name="login" class="button">Login</button>
        <p id="msg"></p>
      </form>
    </div>
  </div>

  <script src="functions.js"></script>

</body>

</html>