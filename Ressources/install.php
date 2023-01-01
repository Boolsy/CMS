
<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "prestashop.sql";

$conn = mysqli_connect($host, $username, $password);


$sql = "CREATE DATABASE $dbname";
mysqli_query($conn, $sql);


mysqli_select_db($conn, $dbname);


$sql = file_get_contents('prestashop.sql');
mysqli_query($conn, $sql);


mysqli_close($conn);

echo "Base de donnees installee avec succes !";

// Essai import auto de la base de donnees 