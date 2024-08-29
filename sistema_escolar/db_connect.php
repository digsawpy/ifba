<?php
$servername = "131.196.197.61";
$username = "root";
$password = "Mabete-007";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
