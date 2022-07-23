<?php  

include "db_conn.php";

$sql = "SELECT * FROM contacto ORDER BY id DESC";
$result = mysqli_query($conn, $sql);