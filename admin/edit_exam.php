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

$id=$_GET["id"];
$res=mysqli_query($link,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
    $exam_date = $row["exam_date"];
    $starttime = $row["starttime"];
    $endtime = $row["endtime"];
    $exam_time=$row["exam_time_in_minutes"];
}
?>
<style>
.right-panel header.header {
    background: #003153;
}
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
.btn-success {
    color: #fff;
    background-color: #003153;
    border-color: #3b398c;
    font-size: 20px;
    font-weight: bold;
}
.card-header {
    background-color:#003153;
    color: white;
}
.card{
    border-color: #003153;
    border-style: solid;
    border-width: 3px;
}
</style>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><font color="white">Edit Exam Categories</font></h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form name="form1" action="" method="post">
                            <div class="card-body">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header"><strong>Edit Exam Categories</strong>

                                        </div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company"
                                                                           class=" form-control-label">New Exam
                                                    Category</label><input type="text" name="examname"
                                                                           placeholder="Add Exam Category"
                                                                           class="form-control" value="<?php echo $exam_category; ?>" required>



                        <div class="form-group"><label for="vat" class=" form-control-label">Exam Date</label><input
                                                    type="Date"  placeholder="Exam Time In Minutes" class="form-control" name="examdate" value="<?php echo $exam_date; ?>" required></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">Start Time
                                                    </label><input
                                                    type="time"  placeholder="Exam Time In Minutes" class="form-control" name="starttime" value="<?php echo $starttime; ?>" required></div>
                        <div class="form-group"><label for="vat" class=" form-control-label">End Time
                                                    </label><input
                                                    type="time"  placeholder="End Time" class="form-control" name="endtime" value="<?php echo $endtime; ?>" required></div>









                                            </div>
                                            <div class="form-group"><label for="vat" class=" form-control-label">Exam Time
                                                    In Minutes </label><input
                                                    type="text"  placeholder="Exam Time In Minutes" class="form-control" name="examtime" value="<?php echo $exam_time; ?>" required></div>

                                            <div class="form-group">

                                                <input type="submit" name="submit1" value="Update Exam" class="btn btn-success">

                                            </div>

                                        </div>
                                    </div>
                                </div>





                            </div>
                        </form>
                    </div>

                </div>
                <!--/.col-->


            </div>
        </div>
        <!-- .animated -->
    </div><!-- .content -->

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"update exam_category set category='$_POST[examname]',exam_date='$_POST[examdate]',starttime='$_POST[starttime]',endtime='$_POST[endtime]',exam_time_in_minutes='$_POST[examtime]' where id=$id") or die(mysqli_error($link));

    ?>
    <script type="text/javascript">

        window.location="exam_category.php";
    </script>
    <?php

}

?>


<?php
include "footer.php";
?>