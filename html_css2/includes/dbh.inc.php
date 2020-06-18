<?php
$servername = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBname = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if (!$conn) {
    die("pada".mysqli_connect_error());
}
?>