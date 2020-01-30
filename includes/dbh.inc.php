<?php

$ServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "login_system";

$conn = mysqli_connect($ServerName,$dbUserName,$dbPassword,$dbName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
