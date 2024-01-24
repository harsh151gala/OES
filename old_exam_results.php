<?php
session_start();
include "header.php";
include "connection.php";
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

   

center{
display: block;
text-align: center;
margin-top: 100px;

}

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
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 2px solid #dee3de;
}


</style>


    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: #003153; color:#dee3de;">

            <center>
            <h1>Exams Results</h1>
            </center>

            <?php
            $count=0;
            $res=mysqli_query($link,"select * from exam_results where username='$_SESSION[username]' order by id desc");
            $count=mysqli_num_rows($res);

            if($count==0)
            {
                ?>
                <center>
                    <h1>No Results Found</h1>
                </center>

                <?php
            }
            else{

                echo "<table class='table table-bordered'>";
                echo "<tr style='background-color: #dee3de; color:black'>";
                echo "<th>"; echo "username"; echo "</th>";
                echo "<th>"; echo "exam type"; echo "</th>";
                echo "<th>"; echo "total question";  echo "</th>";
                echo "<th>"; echo "correct answer";  echo "</th>";
                echo "<th>"; echo "wrong answer";  echo "</th>";
                echo "<th>"; echo "exam time"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row["username"]; echo "</td>";
                    echo "<td>"; echo $row["exam_type"]; echo "</td>";
                    echo "<td>"; echo $row["total_question"];  echo "</td>";
                    echo "<td>"; echo $row["correct_answer"];  echo "</td>";
                    echo "<td>"; echo $row["wrong_answer"];  echo "</td>";
                    echo "<td>"; echo $row["exam_time"]; echo "</td>";
                    echo "</tr>";
                }


                echo "</table>";


            }



            ?>

        </div>

    </div>


<?php
include "footer.php";
?>