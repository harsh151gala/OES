<?php
session_start();
include "header.php";
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
?>
<style>
.breadcome-list {
    
    background: #003153;
    font-size: 20px;
    font-weight: bold;
}


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

.row{
    -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: black;
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

.btn-warning {
    color: #fff;
    background-color: #337ab7;
    border-color: #337ab7;

}
.btn-success {
    color: #fff;
    background-color: #933ec5;
    border-color: #933ec5;
}
ul.breadcome-menu li {
    font-size: 20px;
    display: inline-block;
    color: #f6f8fa;
}


</style>


    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: #003153;">

            <!-- start editing-->
            <br>
            <div class="row">

                <br>
                <div class="col-lg-2 col-lg-push-10" >
                <font size="5">
                    <div id="current_que" style="float:left">0</div>
                    <div style="float:left">/</div>
                    <div id="total_que" style="float:left">0</div>
              </font>
                </div>

                <div class="row" style="margin-top: 30px">

                    <div class="row">
                        <div class="col-lg-10 col-lg-push-1" style="min-height: 300px; background-color: #dee3de" id="load_questions">

                        </div>
                    </div>

                </div>

                <div class="row" style="margin-top: 10px">

                    <div class="col-lg-6 col-lg-push-3" style="min-height: 50px">

                        <div class="col-lg-12 text-center">

                            <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
                            <input type="button" class="btn btn-success" value="Next" onclick="load_next();">


                        </div>


                    </div>

                </div>


            </div>

            <!-- end her editing-->


        </div>

    </div>


<script type="text/javascript">
    var x=0;
    window.onblur = function harsh() {
    // do some stuff after tab was changed e.g.
    alert('You switched the tab 1 chance left');
    if(x==1){
    window.location="login.php";
    }
    x=x+1;
}
    function load_total_que()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_total_que.php",true);
        xmlhttp.send(null);
    }

    var questionno="1";
    load_questions(questionno);

    function load_questions(questionno)
    {
        document.getElementById("current_que").innerHTML=questionno;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="over")
                {
                    window.location="result.php";
                }
                else{
                    document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                    load_total_que();

                }


            }
        };
        xmlhttp.open("GET","forajax/load_questions.php?questionno="+ questionno,true);
        xmlhttp.send(null);

    }

    function radioclick(radiovalue,questionno)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            }
        };
        xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+ questionno +"&value1="+radiovalue,true);
        xmlhttp.send(null);

    }

    function load_previous()
    {
       if(questionno=="1")
       {
           load_questions(questionno);
       }
        else{
           questionno=eval(questionno)-1;
           load_questions(questionno);
       }
    }

    function load_next()
    {
        questionno=eval(questionno)+1;
        load_questions(questionno);
    }

</script>


<?php
include "footer.php";
?>