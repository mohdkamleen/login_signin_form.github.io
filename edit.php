
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            width: 100vw;
           display: flex;
           justify-content: center;
           align-items: center;
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .container{
           /* height: 400px; */
           width: 800px;
           display: flex;
           justify-content: center;
           align-items: center;
          
           padding: 40px 0px;
        }
        input{
            margin: 9px 0px;
            border: none;
            outline: none;
            border-bottom: 2px solid red;
            margin-left: 10px;
           
          
        }
        label{
            text-transform: capitalize;
            color: red;
        }
        input[type="submit"]{
            text-transform: capitalize;
            text-align: center;
            margin-left: 45%;
            margin-top: 20px;
            background-color: rgb(238, 233, 230);
            color: red;
        }
        h1{
            text-align: center;
            color: red;
            text-transform: capitalize;
        }
        form{
            display: inline-block;
            border: 2px solid red;
            padding: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
<form action="edit.php" method="GET">
            <h1>login</h1>
            <label for="email">email</label>
            <input type="name" name="user" value="<?php echo $_GET['n']; ?>"> <br>
            <label for="password">password</label>
            <input type="password" name="password"  value="<?php echo $_GET['p']; ?>"> <br>
            <input type="submit" name="sub" value="edit">
</form>
</div>
</body>
</html>





<?php
// error_reporting(0);

$conn = mysqli_connect("localhost", "root", "", "kamleen");

$email = $_GET['user'];
$pass = $_GET['password'];


$P = $_GET['n'];


$qury = "UPDATE login SET name='$email', password=$pass WHERE password='$p'";
$send = mysqli_query($conn, $qury);

?>
