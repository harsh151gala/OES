<?php
session_start();
include "connection.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[exam_time] minutes"));
include "header.php";
error_reporting(0);
?>

<style>
center{
display: block;
text-align: center;
margin-top: 100px;

}

.breadcome-list {
    
    background: #003153;
   
}


 .header-top-area {
    background: -webkit-linear-gradient(178deg, #e12503 0%, #85060c 100%);
    background: #003153;
    z-index: 99;
    left: 200px;
    right: 0;
    top: 0;
    margin: 0 auto;
    transition: all 0.3s;
    }

.row{
    -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: white;
}

html, body {
    height: 100%;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    background-color: #dee3de
    }
    .footer-copyright-area {
    background: #003153;
    padding: 20px 0px;
    text-align: center;
}


ul.breadcome-menu li {
    font-size: 20px;
    display: inline-block;
    color: #f6f8fa;
}


</style>

    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 350px;font-size: 20px
        font-weight:bold;  background-color: #003153;">

            <?php
            $correct=0;
            $wrong=0;

            if(isset($_SESSION["answer"]))
            {
                for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
                {
                    $answer="";
                    $res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]' && question_no=$i");
                    while($row=mysqli_fetch_array($res))
                    {
                        $answer=$row["answer"];
                    }

                    if(isset($_SESSION["answer"][$i]))
                    {
                        if($answer==$_SESSION["answer"][$i])
                        {
                            $correct=$correct+1;
                        }
                        else{
                            $wrong=$wrong+1;
                        }

                    }
                    else{
                        $wrong=$wrong+1;
                    }

                }

            }


             $count1=0;

            $res1=mysqli_query($link,"select * from attempt where exam_type='$_SESSION[exam_category]' and username='$_SESSION[username]'"); 
            $count1=mysqli_num_rows($res1);
           

            $count=0;
            $res=mysqli_query($link,"select * from questions where category='$_SESSION[exam_category]'");
            $count=mysqli_num_rows($res);
            $wrong=$count-$correct;


            if($count1 == 1)
            {
            echo "<br>";echo "<br>";
            echo "<center>";
            echo "Total Questions=".$count;
            echo "<br>";
            echo "Correct Answer=".$correct;
            echo "<br>";
            echo "Wrong Answer=".$wrong;


            echo "</center>";
        }
        elseif($count1 > 1){
        	 echo "<center>";
        	echo "You have given the exam";
        	echo "</center>";
        
        }
            ?>


        </div>

    </div>

<?php




if(isset($_SESSION["exam_start"]))
{



    $date=date("Y-m-d");
    $ex="SELECT * FROM exam_results WHERE username = '$username' and exam_type='$exam_type'";
    $res=mysqli_query($link,$ex);
if(mysqli_num_rows($res) > 0)
{
    mysqli_error($link);
}
else
{


	 mysqli_query($link,"insert into attempt(username,exam_type)values('$_SESSION[username]','$_SESSION[exam_category]')") or die(mysqli_error($link));

    mysqli_query($link,"insert into exam_results(id,username,exam_type,total_question,correct_answer,wrong_answer,exam_time)values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')") or die(mysqli_error($link));


}


}

if(isset($_SESSION["exam_start"]))
{

    unset($_SESSION["exam_start"]);
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php

}

?>


<?php
include "footer.php";
?>