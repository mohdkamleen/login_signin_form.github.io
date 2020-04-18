<?php
error_reporting(0);
session_start();

$conn = mysqli_connect("localhost", "root", "", "kamleen");


$email = $_POST['user'];
$password = $_POST['password'];
$pass = md5($password);
$file = $_FILES['file']['name'];
$tfile = $_FILES['file']['tmp_name'];
$folder = 'image/'.$file;
move_uploaded_file($tfile, $folder);

$qury = "select * from login ";
$co = mysqli_query($conn, $qury);
$all = mysqli_num_rows($co);


if($all == 1){
    echo "error";
}else{
  
    $main = "insert into login(name, password, image) values('$email', '$pass', '$file')";
    mysqli_query($conn, $main);
    echo "success....";
}


echo $FOLDER;



?>
    <meta http-equiv="refresh" content="1; url=log.html">
