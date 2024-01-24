<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="shortcut icon" type="image/jpg" href="img/icon1.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .wave{
            position: fixed;
            bottom: 0;
            left: 0;
            height: 100%;
            width:30%;
            z-index: 1;
        }
    .text-center{
        margin-top:10px;
    }
    body{
        background-color: #002147!important;
        color:#32be8f;
    }
    .form-control {
        border-radius:10px;
        color:black;
    }

    .text-center1{
        margin-left:30px;
    }
    .harsh{
        margin-top:none;
        margin-left:30px;
    }
    .oes{
    margin-top: 20px;
    width:50%;
    margin-left:80px;
}
a {
    color: white;
}



body{
    margin: 0;
    padding: 0;
    height: 100vh;

}
           
    </style>
</head>
<body>
    <div id="particles-js">
<img class="wave" src="admin/images/wave.png">
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <img class="oes" src="img/icon1.jpg">
                <form action="login.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center1">Login with your username and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="username" name="username" placeholder="Username" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button"  type="submit" name="login" value="Login">
                    </div>
                    <div class="harsh">Not yet a member? <a href="register.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>