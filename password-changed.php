<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
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
    /* .text-center1{
        margin-left:100px;
    }
    .harsh{
        margin-top:none;
        margin-left:30px;
    } */
    .oes{
        margin-top: 10px;
    margin-left:480px;
    width:15%;
    height:15%;
    padding-bottom:50px;
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
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <input class="form-control-button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>