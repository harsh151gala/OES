<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
    body{
        background-color: #002147!important;
        color:#32be8f;
    }
    .text-center{
        margin-top:20px;
    }
    .text-center1{
        margin-left:80px;
    }
    .form-control {
        border-radius:10px;
        color:black;
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
    .oes{
    margin-top: 20px;
    margin-left:480px;
    width:15%;
    height:15%;

}
    </style>
</head>
<body>
<img class="wave" src="admin/images/wave.png">
    <div class="container">
        <div class="row">
        <img class="oes" src="img/icon1.jpg">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center1">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control-button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>