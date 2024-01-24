<?php
include "../connection.php";
include 'vishal.php';
$var_value = $_GET['varname'];
$res=mysqli_query($link,"SELECT * FROM exam_results WHERE exam_type='$var_value'");
if(mysqli_num_rows($res)>0)
		{
			echo "You have given exam";
		}

else{
?>
<script type="text/javascript">
	window.location = "select_exam.php"
</script>
<?php
}
?>