


<?php
error_reporting(0);
session_start();
if($_SESSION['use'] == true){
   
}else{
    header('location:home.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstraph.css">
    <style>
       
        h1{
          
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
     
        }
        span{
            font-weight:bold;
           animation: name 8s linear alternate infinite;
           text-transform:uppercase;
        }
        @keyframes name{
            0%{
                color:green;
            }20%{
                color:gray;
            }40%{
                color:blue;
            }60%{
                color:green;
            }80%{
                color:yellow;
            }100%{
                color:black;
            }
        }
      
    </style>
</head>
<body class="container">
    <h1 class="text-center text-success">welcom  <span><?php echo $_SESSION['use']; ?></span></h1>




<table class="table table-striped table-bordered table-hover bg-light">
<tr class="text-center bg-dark text-light">
  <th>username</th>
  <th>password</th>
  <th>image</th>
  <th>delete</th>
  <th>edit</th>
</tr>



    <?php
$conn = mysqli_connect("localhost", "root", "", "kamleen");
$q = "select * from login";
$qu = mysqli_query($conn, $q);
while($res = mysqli_fetch_array($qu)){
?>




<tr class="text-center ">
  <td><?php echo $res['name']; ?></td>
  <td><?php echo $res['password']; ?></td>
  <td><img src="<?php echo $folder; ?>" width="100px" height="100px"/></td>
  <td><a class="btn btn-outline-danger" href="delete.php?p=<?php echo $res['password']; ?>"> delete </a></td>
  <td><a class="btn btn-outline-primary" href="edit.php?n=<?php echo $res['name']; ?>&p=<?php echo $res['password']; ?>"> edit </a></td>
  
</tr>



<?php
}
?>




</table>



<div class="btn btn-group">
     <a class="btn btn-outline-primary" name="logout"  href="logout.php"> logout </a> 
     <a class="btn btn-outline-primary" href="edit.php"> edit </a> 
     <a class="btn btn-outline-primary" href="delete.php?n=<?php echo $res['password']; ?>"> delete </a> 
</div>




</body>
</html>