<?php

$host = "localhost";
$username = "saundha_admin";
$password = "Db59agaRKDQX";
$db_name = "saundha_mydb";

$conn = mysqli_connect($host, $username, $password, $db_name);
if (empty($conn)) {
    die("Connection failue" . mysqli_connect_error());
}

