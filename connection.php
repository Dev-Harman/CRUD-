<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Connecction Fail";
}