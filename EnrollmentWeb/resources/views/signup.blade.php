<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
        <div class="maincontainer">
        

            <div class="logincontainer2">
                <h1>Sign Up Page</h1>
                
                <div class="inside">
                    <form action="register">
                    @csrf
                {{ method_field('PUT') }}
                <input type="text" name="firstname" id="firstname" placeholder="Firstname" required> <br><br>
                <input type="text" name="lastname" id="lastname" placeholder="Lastname" required> <br><br>
                <input type="email" name="email" id="email" placeholder="Email" required> <br><br>
                <input type="password" name="password" id="password" placeholder="Password" required> <br><br>
                <br><br>
                <button class="btn_log">Sign In</button>
                </form>
               
                </div>
                
            </div>
            
        </div>
    </div>
    
</body>
</html>