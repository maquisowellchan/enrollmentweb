<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Enrollee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="maincontainer">
    <div class="logincontainer3">
    <h1>ADD USER</h1> <br>
    <div class="inside">
        <form action="successadduser">
        
        @csrf
        {{ method_field('PUT') }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="firstname" id="firstname" placeholder="First Name" required> <br> <br>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" required> <br> <br>
        <input type="text" name="age" id="age" placeholder="Age" required> <br> <br>
        <input type="text" name="gender" id="gender" placeholder="Gender" required> <br> <br>
        <input type="text" name="email" id="email" placeholder="Email" required> <br> <br>
        <input type="text" name="contactnumber" id="contactnumber" placeholder="Contact Number" required> <br> <br>
        <br><br>
        <button class="btn_reg">Add</button>   
        </form>
    </div>
    
    </div>
    
    </div>
    
</body>
</html>