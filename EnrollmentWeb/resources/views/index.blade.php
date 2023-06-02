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
         

            <div class="logincontainer">
                <h1 style="margin-top: 10px;">LOGIN PAGE</h1>
                <div class="inside">
                    <form action="login">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="email" name="email" id="email" placeholder="Email" required> <br><br>
                    <input type="password" name="password" id="password" placeholder="Password" required> <br><br>
                    <br><br>
                    <button class="btn_log">LOGIN</button>
                    </form>
                <button><a href="http://127.0.0.1:8000/signup">SIGN UP</a></button>
                </div>
                    
            </div>
            <div>
                
            </div>
            
        </div>
    </div>
    
</body>
</html>