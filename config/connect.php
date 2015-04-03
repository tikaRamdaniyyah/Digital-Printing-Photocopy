<?php
$servername = "localhost";
$id = "root";
$password = "";
$database = "db_dipho";

// Create connection
$conn = mysql_connect($servername, $id, $password);
mysql_select_db($database, $conn);
// Check connection
if ($conn) {
    echo "Connected successfully";
}else{
    echo "Connected failed";
}
?>