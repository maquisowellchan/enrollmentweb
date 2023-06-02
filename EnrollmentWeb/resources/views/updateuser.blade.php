<!DOCTYPE html>
<html lang="en">
<head>
    <!-- your head content here -->
</head>
<body>
<div class="register">
    <form action="successupdateuser" method="POST"> <!-- Add method="POST" -->
    <h1>UPDATE USER</h1> <br>
    @csrf
    {{ method_field('PUT') }}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}" required> <br> <br>
    <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required> <br> <br>
    <input type="text" name="age" id="age" placeholder="Age" value="{{ old('age') }}" required> <br> <br>
    <input type="text" name="gender" id="gender" placeholder="Gender" value="{{ old('gender') }}" required> <br> <br>
    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required> <br> <br>
    <input type="text" name="contactnumber" id="contactnumber" placeholder="Contact Number" value="{{ old('contactnumber') }}" required> <br> <br>
    <br><br>
    <button class="btn_reg">UPDATE</button>   
    </form>
</div>

</body>
</html>
