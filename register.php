<?php include('src/php/user_server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
    <title>LeStore - Create an account</title>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="store-title" href="index.php"><i>LeStore</i></a>
       </div>
    </div>
        
    <div class="useracc_banner">
        <h1>Create an account</h1>
    </div>

    <div class="container">
        <div class="form-box">
            <form action="" method="post">
                <div class="login-form">
                    <div>
                        <label for="real_name">Your Name</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="real_name" type="text" class="validate" name="real_name">
                    </div>
                </div>

                <div class="login-form">
                    <div>
                        <label for="username">Username</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="username" type="text" class="validate" name="username">
                    </div>
                </div>

                <div class="login-form">
                    <div>
                        <label for="password_1">Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password_1" type="password" class="validate" name="password_1">
                    </div>
                </div>

                <div class="login-form">
                    <div>
                        <label for="password_2">Repeat Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password_2" type="password" class="validate" name="password_2">
                    </div>
                </div>
            <form>

            <div class="login-form">
                <center>
                    <button type="submit" class="btn_solid-main" name="reg_user">Sign Up</button>
                </center>
            </div>
            <div>
                <p>
                    Don't have an account yet?  <a href="register.php">Register now!</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
