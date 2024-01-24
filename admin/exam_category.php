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
.right-panel header.header {
    background: #003153;
}


.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #000000;
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
.table-bordered td, .table-bordered th {
    border: 2px solid #000000;
}
.right-panel header.header {
    background: #003153;
}
.btn-success {
    color: #fff;
    background-color: black;
    border-color: #3b398c
    font-size: 20px;
    font-weight: bold;
}
a, button {
    color: black;
}
a:hover {
  color: white;
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
                    <h1><font color="white">ADD EXAM</font></h1>
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
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header"><strong>Add Exam Categories</strong>

                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company"
                                                                       class=" form-control-label">New Exam
                                                Category</label><input type="text" name="examname"
                                                                       placeholder="Add Exam Category"
                                                                       class="form-control" required>
                                        </div>




                                        <div class="form-group"><label for="vat" class=" form-control-label">Exam Date
                                                </label>
                                                <input type="date"  placeholder="Exam Date & Time" class="form-control" name="examdate" required></div>




                                        <div class="form-group"><label for="vat" class=" form-control-label">Start time
                                                </label>
                                                <input type="time"  placeholder="Start time" class="form-control" 
                                                name="starttime" required></div>

                                                 <div class="form-group"><label for="vat" class=" form-control-label">End time
                                                </label>
                                                <input type="time"  placeholder="End time" class="form-control" 
                                                name="endtime" required></div>

                                        <div class="form-group"><label for="vat" class=" form-control-label">Exam Time
                                                In Minutes </label><input
                                                type="text"  placeholder="Exam Time In Minutes" class="form-control" name="examtime" required></div>

                                        <div class="form-group">

                                            <input type="submit" name="submit1" value="Add Exam" class="btn btn-success">

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Exam Categories</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Exam Name</th>
                                                <th scope="col">Exam Date</th>
                                                <th scope="col">Start Time</th>
                                                <th scope="col">End Time</th>
                                                <th scope="col">Exam Time</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            $count=0;
                                            $res=mysqli_query($link,"select * from exam_category");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                           $count=$count+1;
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $row["category"]; ?></td>
                                                    <td><?php echo $row["exam_date"]; ?></td>
                                                    <td><?php echo $row["starttime"]; ?></td>
                                                    <td><?php echo $row["endtime"]; ?></td>
                                                    <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                                    <td><a href="edit_exam.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                                    <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                                                </tr>

                                                <?php

                                            }

                                            ?>


                                            </tbody>
                                        </table>
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
    mysqli_query($link,"insert into exam_category values(NULL,'$_POST[examname]','$_POST[examdate]','$_POST[starttime]',
        '$_POST[endtime]','$_POST[examtime]')") or die(mysqli_error($link));

    ?>
    <script type="text/javascript">
        alert("exam added successfully\n𝐆𝐔𝐈𝐃𝐄𝐋𝐈𝐍𝐄𝐒 𝐅𝐎𝐑 𝐀𝐃𝐌𝐈𝐍\n1:𝑃𝐿𝐸𝐴𝑆𝐸 𝐷𝐸𝐿𝐸𝑇𝐸 𝑇𝐻𝐸 𝐸𝑋𝐴𝑀 𝑂𝑁𝐶𝐸 𝐼𝑇 𝐶𝑂𝑀𝑃𝐿𝐸𝑇𝐸𝐷\n2:𝑌𝑂𝑈 𝐶𝐴𝑁 𝐸𝐷𝐼𝑇 𝐸𝑋𝐴𝑀 𝑁𝐴𝑀𝐸 𝐴𝑁𝐷 𝑇𝐼𝑀𝐸\n3:𝑌𝑂𝑈 𝐶𝐴𝑁 𝐴𝐷𝐷 𝑄𝑈𝐸𝑆𝑇𝐼𝑂𝑁𝑆 𝑊𝐼𝑇𝐻 𝑂𝑃𝑇𝐼𝑂𝑁𝑆\n4:𝑌𝑂𝑈 𝐶𝐴𝑁 𝐴𝐷𝐷 𝑄𝑈𝐸𝑆𝑇𝐼𝑂𝑁𝑆 𝑊𝐼𝑇𝐻 𝐼𝑀𝐴𝐺𝐸𝑆\n5:𝑌𝑂𝑈 𝐶𝐴𝑁 𝐸𝐷𝐼𝑇 𝑄𝑈𝐸𝑆𝑇𝐼𝑂𝑁𝑆");
        window.location.href=window.location.href;
    </script>
    <?php

}

?>


<?php
include "footer.php";
?>