<?php
session_start();
if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
?>
<?php
include "connection.php";
include "header.php";
?>
<style>
 
    .header-top-area {
    background: -webkit-linear-gradient(178deg, #e12503 0%, #85060c 100%);
    background: #003153;
    font-size: 20px;
    font-weight: bold;
    z-index: 99;
    left: 200px;
    right: 0;
    top: 0;
    margin: 0 auto;
    transition: all 0.3s;
    }


    ul.breadcome-menu li {
    font-size: 14px;
    display: inline-block;
    color: #003153;
}



   html, body {
    height: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    background-color: #dee3de;
    }
    .footer-copyright-area {
    background: #003153;
    padding: 20px 0px;
    text-align: center;
}

hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #dee3de;
}


    .breadcome-list {
    padding-top: 20px;
    padding-bottom: 20px;
    background: #003153;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 30px;
    margin-top: 20px;
    font-size: 20px;
    font-weight: bold;
    }

</style>






    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: #003153;">


            <hr>
            <center>
            <h3 style="color: white;">Select Exam Category</h3>
            </center>
            <hr>





<!-- 
$begintime = 8:30;
$endtime = 17:00;

if(date("d-m-Y H:i:s") is between $starttime and $endtime) {
    // do something
} else {
    // do something else
}

 -->




     

          <?php
            date_default_timezone_set('Asia/Kolkata');
            $currenttime = date("H:i");
            $currentdate = date("Y-m-d");

            // $starttime = date("H:i");




            
            $res=mysqli_query($link,"select * from exam_category where exam_date = '$currentdate' AND '$currenttime' BETWEEN starttime AND endtime");

            while($row=mysqli_fetch_array($res))
            {
                ?>
            <input type="button" class="btn btn-success form-control" value="<?php echo $row["category"]; ?>" style="margin-top: 10px; background-color:#dee3de; color: black ;font-size:20px; font-weight:bold;" onclick="set_exam_type_session(this.value);">
                <?php

            }

            ?> 
















        </div>

    </div>













<?php
include "footer.php";
?>

<script type="text/javascript">




    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ exam_category,true);
        xmlhttp.send(null);
    }

</script>