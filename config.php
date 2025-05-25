<?php
$host = 'sql201.infinityfree.com';
$user = '	if0_39061797';
$pass = 'hA0oYWkSiErrB9';
$db   = 'if0_39061797_db_inventory';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>