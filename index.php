<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        OES
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="img/icon1.jpg">
        <style>
        @import url('https://fonts.googleapis.com/ css?family=Poppins:200, 300, 400, 500, 600, 700, 800, 900&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #262626;
        }
        .container{
            text-align: center;
            position: absolute;
            top: 20%;
            left: 50%;
            transform : translate(-50%,-50%);
            width: 100%;
        }
        .container span{
            text-transform: uppercase;
            display: block;
        }
        .text1{
            font-size: 60px ;
            font-weight: 1000;
            font-family:Luminari fantasy;
            color: white;
            border:10px;
            border-radius:5px;
            letter-spacing: 8px;
            margin-bottom: 20px;
            background:#262626;
            position: relative;
            animation: text 3s 1;
            overflow: hidden;
            transition: 0.5s;
            /*-webkit-box-reflect: below 1px linear-gradient(transparent,#0003);*/
        }
        .text2{
            font-size: 30px;
            /* color: #6ab04c; */
            /* color:#21ebff; */
            /* color:#32be8f; */
            color:#39ff14;
        }
        @keyframes text {
            0%{
                color: black;
                margin-bottom: -40px;
            }
            30%{
                letter-spacing: 25px;
                margin-bottom: -40px;
            }
            85%{
                letter-spacing: 8px;
                margin-bottom: -40px;
            }
        }

        .text2{
  font-size: 30px;
  font-weight: bold;
  color: #110011;
  text-align: center;
  animation: text2 1s ease-in-out infinite alternate;
}

@-webkit-keyframes text2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #21ebff, 0 0 40px #21ebff, 0 0 50px #21ebff, 0 0 60px #21ebff, 0 0 70px #21ebff;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #82f1fc, 0 0 40px #82f1fc, 0 0 50px #82f1fc, 0 0 60px #82f1fc, 0 0 70px #82f1fc, 0 0 80px #82f1fc;
  }
}
        
        a{
            position: relative;
            padding: 10px 30px;
            margin: 0 15px;
            color: #21ebff; 
            text-decoration: none;
            text-transform: uppercase;
            Letter-spacing: 2px;
            font-size: 20px;
            overflow: hidden;
            transition: 0.5s;
            -webkit-box-reflect: below 1px linear-gradient(transparent,#0003);
        }
        a:nth-child(1){
            filter: hue-rotate(115deg);
        }
        a:nth-child(3){
            filter: hue-rotate(270deg);
        }
        a:hover{
            background: #21ebff;
            color: #111;
            box-shadow: 0 0 50px #21ebff;
            transition-delay: 0.5s;
        }
        a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 10px;
            height: 10px;
            border-top: 2px solid #21ebff;
            border-left: 2px solid #21ebff;
            transition: 0.5s;
            transition-delay: 0.5s;
        }
        a:hover:before{
            width: 100%;
            height: 100%;
            transition-delay: 0.5s;
        }
        a:after{
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 10px;
            height: 10px;
            border-bottom: 2px solid #21ebff;
            border-right: 2px solid #21ebff;
            transition: 0.5s;
            transition-delay: 0.5s;
        }
        a:hover:after {
            width: 100%;
            height: 100%;
            transition-delay: 0.5s;
        }



        body{
    margin: 0;
    padding: 0;
    height: 100vh;

}
#particles-js
{
    /* height: 100%; */
    width: 1366px;
    height: 657px;
    background: #262626;
    position: absolute;
}


        
        
    </style>

</head>
<body>
    <div id="particles-js">
    </div>
     <div class="container">
    <span class="text1">OES</span>
    <span class="text2">ONLINE EXAMINATION SYSTEM</span>
  	</div>
    <a href="login.php">USER LOGIN</a>  
    <a href="admin/index.php">ADMIN LOGIN</a> 

<!-- <div data-v-37fa68ba="" id="astra-notification-image" class="companion-message__image">
    <img data-v-37fa68ba="" src="img/astra2.png" class="companion-message__image-overlay"> 
    <img data-v-37fa68ba="" src="img/astra1.png" alt="Companion" class="companion-message__image-base">
</div> -->



<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
</body>
</html>