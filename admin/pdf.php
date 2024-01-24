<?php
require('vendor/autoload.php');
include "../connection.php";
include 'old-exam-results';
$var_value = $_GET['varname'];
$res=mysqli_query($link,"SELECT * FROM exam_results WHERE exam_type='$var_value' or username='$var_value'");
if(mysqli_num_rows($res)>0){
	$html='<table width="100%" border="1" cellpadding="5" cellspacing="0">';
		$html.='<tr><td>ID</td><td>Name</td><td>Exam Name</td><td>Total Questions</td><td>Correct Answer</td><td>Wrong Answer</td><td>Exam Time</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['exam_type'].'</td><td>'.$row['total_question'].'</td><td>'.$row['correct_answer'].'</td><td>'.$row['wrong_answer'].'</td><td>'.$row['exam_time'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>