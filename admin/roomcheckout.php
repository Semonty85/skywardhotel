<?php

include '../config.php';

$id = $_GET['id'];

$roomupcheckout = "UPDATE roombook SET stat = 'checkout' WHERE id = $id";

$result = mysqli_query($conn, $roomupcheckout);

header("Location:roombook.php");

?>