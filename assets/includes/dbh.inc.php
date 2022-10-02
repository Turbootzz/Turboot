<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "turboot";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
echo ("database works");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}