<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
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
        margin-left:100px;
    }
    .harsh{
        margin-top:none;
        margin-left:30px;
    }
    .oes{
        margin-top: 20px;
    margin-left:480px;
    width:15%;
    height:15%;
}
a {
    color: white;
}
.form-control-button{
        border-radius:10px;
        background-color:#32be8f;
        
        background-image: none;
        border: 1px solid #e5e6e7;
        color: black;
        font-weight:bold;
        display: block;
        padding: 6px 12px;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        width: 100%;
        height: 40px;
        box-shadow: none;
    }
           
    </style>
</head>
<body>
<img class="wave" src="admin/images/wave.png">
    <div class="container">
        <div class="row">
        <img class="oes" src="img/icon1.jpg">
            <div class="col-md-4 offset-md-4 form">
                <form action="register.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center1">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" required value="<?php echo $username ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control-button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
