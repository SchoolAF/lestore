<?php include('src/php/user_server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="topnav">
            <a class="store-title" href="index.php"><i>LeStore</i></a>
       </div>
    </div>
        
    <div class="useracc_banner">
        <h1>Login to your account</h1>
    </div>

    <div class="container">
        <div class="form-box">
            <form action="" method="post">
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
                        <label for="password">Password</label>
                    </div>
                    
                    <div>
                        <input class="form-input-underline" id="password" type="password" class="validate" name="password">
                    </div>
                </div>
            <form>

            <div class="login-form">
                <center>
                    <button type="submit" class="btn_solid-main" name="login_user">Login</button>
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
