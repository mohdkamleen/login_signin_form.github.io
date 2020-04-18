<?php
session_start();
header('location:home.php');
$conn = mysqli_connect("localhost", "root", "", "kamleen");
$r = $_GET['p'];
$del = "DELETE FROM login WHERE password = $r";
mysqli_query($conn, $del);
?> 