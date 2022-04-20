<?php 

$username = "root";
$password = "";
$host = "localhost";
$db_name = "ethernet";

$conn = mysqli_connect ($host, $username, $password);
$db = mysqli_select_db ( $conn, $db_name );

?>