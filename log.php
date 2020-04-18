
<?php
session_start();


$conn = mysqli_connect("localhost", "root", "", "kamleen");


$email = $_POST['user'];
$password = $_POST['password'];
$pass = md5($password);


$qury = "select * from login where name='$email' && password='$pass'";
$co = mysqli_query($conn, $qury);


$all = mysqli_num_rows($co);


if($all == 1){
  $_SESSION['use'] = $email ;
  header('location:home.php');
    
}else{
 
   echo "user unavailable.........";
  // header('location:log.html');
}






?>