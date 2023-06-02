<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Update User</title>
</head>
<body>

<?php
$con = mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con, "enrollweb");

if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['email']) && isset($_GET['contactnumber'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $contactnumber = $_GET['contactnumber'];

    $query = "UPDATE enrollees SET firstname = '$firstname', lastname = '$lastname', age = '$age', gender = '$gender', email = '$email', contactnumber = '$contactnumber' WHERE id = '$id'";

    if (mysqli_query($con, $query)) {
        echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;'>Record updated successfully</p>";
    } else {
        echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;'>Error updating record: " . mysqli_error($con) . "</p>";
    }
} else {
    echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;'>Error updating record: " . mysqli_error($con) . "</p>";
}

mysqli_close($con);
?>

<a href='http://127.0.0.1:8000/dashboard'>
    <input style="background-color: rgb(121, 119, 119);  font-family: Roboto; width: 250px; font-size: 20px; border-radius: 5px; border: 3px solid rgb(250, 243, 243); color: rgb(250, 243, 243); position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;" type='button' value='GO TO DASHBOARD'/>
</a>

</body>
</html>
