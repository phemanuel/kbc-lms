<?php
include ('dbconfig.php');

//----get POST values----
$review_msg1 = $_REQUEST['review_msg'];
$review_msg = mysqli_real_escape_string($conn,$review_msg1);
$project_status = $_REQUEST['project_status'];
$project_sub_status = "Reviewed";
$student_email = $_SESSION['student_email'];
$project_id = $_SESSION['project_id'];
//$course_progress = 100;
$datetime = date("Y-m-d H:i:s");


if ($project_status == "In review") {

	$project_status = "In progress";
	$project_sub_status = "Reviewed";
}
elseif ($project_status == "Approved") {

	$project_status = "Completed" ;
	$project_sub_status = "Approved";
	
}

//=======Update project submission===========
$sql = "UPDATE bootcamp_project SET review_status = '$project_sub_status', review_comment='$review_msg',review_date='$datetime' WHERE ID='$project_id' ";
$result=mysqli_query($conn,$sql);

//=====update coursereg===========
// $sql1 = "UPDATE coursereg SET course_status = '$project_status', progress = '$course_progress' WHERE user_email='$student_email' ";
// $result1=mysqli_query($conn,$sql1);
//===============

echo "<script>
alert('Your review submission is successful.')
window.location.href='dashboardcheck';
</script>";
?>