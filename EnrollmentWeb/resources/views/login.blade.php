
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body style="background-color: #6a62d2;">

<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"enrollweb"); 


$email = $_POST['email'] = $_GET[('email')];  
$password = $_POST['password'] = $_GET[('password')];  
      
       
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from regusers where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql)or die( mysqli_error($con));  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;color:white;'>" . "LOGIN SUCCESSFUL!" . "</p>"; 
            echo  "<a href='http://127.0.0.1:8000/dashboard'>"."<input type='button' style='background-color: rgb(121, 119, 119);  font-family: Roboto; width: 250px; font-size: 20px; border-radius: 5px; border: 3px solid rgb(250, 243, 243); color: rgb(250, 243, 243); position: absolute; left: 43%; top: 40%; padding: 30px; cursor: pointer;' value='GO TO DASHBOARD' />". "</a>";
        }  
        else{  
            echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;color:white;'>" . "INVALID USERNAME OR PASSWORD!" . "</p>";   
            echo "<a href='http://127.0.0.1:8000'>"."<input type='button' style='background-color: rgb(121, 119, 119);  font-family: Roboto; width: 250px; font-size: 20px; border-radius: 5px; border: 3px solid rgb(250, 243, 243); color: rgb(250, 243, 243); position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;' value='GO BACK' />". "</a>";
        }     
?>
    
</body>
</html>



