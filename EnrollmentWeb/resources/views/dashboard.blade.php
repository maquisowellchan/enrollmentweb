<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #6a62d2;
        }

        .tablecontainer {

            margin: 50px auto;
            width: 80%;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            font-family:Arial, Helvetica, sans-serif;
        }

        th {
            background-color: #6a62d2;
            color: #fff;
            font-family:Arial, Helvetica, sans-serif;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .btn-add, .btn-logout {
            background-color: #6a62d2;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-add:hover, .btn-logout:hover {
            background-color: #563dc2;
            cursor: pointer;
        }

        .btn-add a, button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

    <body style="background-color: #6a62d2">

    <?php 
    $con= mysqli_connect("localhost", "root", "");
    $mysql = mysqli_select_db($con,"enrollweb"); 
    ?>

<div class="tablecontainer">
        <?php
        $query = mysqli_query($con, "SELECT * FROM enrollees") or die(mysqli_error());
        
        ?>
    <table border=1>
        <br><br>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>


            

         

        </tr>
        <?php
        
        while($row = mysqli_fetch_array($query)){
         echo "
         <tr>
            <td>$row[firstname]</td>
            <td>$row[lastname]</td>
            <td>$row[age]</td>
            <td>$row[gender]</td>
            <td>$row[email]</td>
            <td>$row[contactnumber]</td>

            <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/updateuser?id=$row[id]'>Update</a></td>
            <td align='center'><a style='text-decoration:none;' href='http://127.0.0.1:8000/delete?id=$row[id]'>X</a></td>
            
  
         
         </tr>
         ";
            

        }
        
        ?>

        <div>
        <button class="btn-add"><a href="adduser">ADD</a></button>
        <button class="btn-add"><a href="http://127.0.0.1:8000/">LOGOUT</a></button>

        </div>
    </div>


        
    </body>
</html>