<?php
session_start();
include "header.php";
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php

}
?>
<style>
    .right-panel .breadcrumbs {
    background-color: #003153;
}
.right-panel .page-header {
    background: #003153;
}
    body{
        background:#dee3de;
        color: black;
        font-weight: bold;
    }
    .card {
    background-color: #dee3de;
}
.table-bordered td, .table-bordered th {
    border: 2px solid #000000;
}
.right-panel header.header {
    background: #003153;
}
.pdf{
    margin-left:900px;
}
/* #harsh{
background-color:red;
color:black;
font-weight:bold;

} */
.button {
  border-radius: 4px;
  background-color:#003153;
  border: none;
  color: white;
  text-align: center;
  font-size: 20px;
  font-weight:bold;
  padding: 10px;
  width:100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

/*.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}*/
/* .title{
    margin-top:50px;
    margin-left:400px;
} */

</style>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><b><font color="white">All Exam Results</font></b></h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                     <!--   This code inputs subject and give the pdf of that subject -->
                            <div class="pdf">
                            
                            <form method="get" action="pdf.php">

<h5>Enter exam name to get result of particular subject</h5>
<h5>OR</h5>
<h5>Enter students username to get result of particular student</h5>



                          <input type="text" name="varname" placeholder="Enter here"value="">
                          <a href="pdf.php">
                                <button class="button" name="Find"><span>PDF </span></button>
                            </a>    
                          </form>
                              
                            </div>


                            <center>
                                <h2>Exams Results</h2>

                            </center>
                            <!-- <center>
                            <a href="pdf.php">PDF</a>
                            </center> -->

                            <?php
                            $count=0;
                            $res=mysqli_query($link,"select * from exam_results order by id desc");
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
                                echo "<tr style='background-color: #003153; color:white'>";
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

                </div>
                <!--/.col-->


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
<script type="text/javascript">
  
const box = document.querySelector('.button')
const boxRect = box.getBoundingClientRect()

box.addEventListener('mousemove' , e => {
  const xPosition = (e.clientX - boxRect.left) / boxRect.width 
  const yPosition = (e.clientY - boxRect.top) / boxRect.height - 0.6 
  const xOffset = -(xPosition - 0.6)
  const dxNorm = Math.min(Math.max(xOffset, -0.6), 0.6)
  box.style.transform = `perspective(1000px)
              rotateY(${dxNorm*45}deg) 
              rotateX(${yPosition*45}deg) `

})

box.addEventListener('mouseleave', () => { 
  box.style.transform = 'none'


})
</script>
<?php
include "footer.php";
?>