<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body style="background-color: #6a62d2;">
<?php
//delete.php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"enrollweb"); 

$query = mysqli_query($con, "DELETE FROM enrollees WHERE id = '".$_GET['id']."'") or die(mysqli_error());


if(!$query){
	echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;color:white'>" . "RECORD NOT DELETED" . "</p>";
}
else{	
	echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;color:white'>" . "RECORD SUCCESSFULLY DELETED" . "</p>";
}
?>
<a href='http://127.0.0.1:8000/dashboard'><input style="background-color: rgb(121, 119, 119);  font-family: Roboto; width: 200px; font-size: 20px; border-radius: 5px; border: 3px solid rgb(250, 243, 243); color: rgb(250, 243, 243); position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;" type='button' value='BACK'/></a>;
    
</body>
</html>