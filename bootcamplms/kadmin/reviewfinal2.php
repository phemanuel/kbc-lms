<?php
include ('dbconfig.php');

//----get POST values----

$project_status = $_REQUEST['project_status'];
$student_email = $_SESSION['student_email'];
$student_id = $_SESSION['student_id'];
$course_code = $_SESSION['course_code'];
$datetime = date("Y-m-d H:i:s");

//smm
$sql1="SELECT *  FROM bootcamp_project WHERE user_email='$student_email' and course_name = 'Social Media Management' and course_code = '$course_code' and review_status= 'Approved' ";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

//va
$sql2="SELECT *  FROM bootcamp_project WHERE user_email='$student_email' and course_name = 'virtual Assistance' and course_code = '$course_code' and review_status= 'Approved' ";
$result2=mysqli_query($conn,$sql2);

// Mysql_num_row is counting table row
$count2=mysqli_num_rows($result2);

//ld
$sql3="SELECT *  FROM bootcamp_project WHERE user_email='$student_email' and course_name = 'Lead Generation' and course_code = '$course_code' and review_status= 'Approved'";
$result3=mysqli_query($conn,$sql3);

// Mysql_num_row is counting table row
$count3=mysqli_num_rows($result3);

//cs
$sql4="SELECT *  FROM bootcamp_project WHERE user_email='$student_email' and course_name = 'Customer Support' and course_code = '$course_code' and review_status= 'Approved'";
$result4=mysqli_query($conn,$sql4);

// Mysql_num_row is counting table row
$count4=mysqli_num_rows($result4);


//------
if($count1 == 1 and $count2 == 1 and $count3 == 1 and $count4 == 1){

	goto d;
}
else{
	echo "<script>
alert('You cannot give a final review as the student has not completed all projects.')
window.location.href='reviewfinal';
</script>";
}

exit;

d:

if ($project_status == "In Progress") {

	$project_status = "In progress";
	//$project_sub_status = "Reviewed";
}
elseif ($project_status == "Completed") {

	$project_status = "Completed" ;
	$course_progress = 100 ;
	
}

//=======Update project submission===========
// $sql = "UPDATE bootcamp_project SET review_status = '$project_sub_status', review_comment='$review_msg',review_date='$datetime' WHERE ID='$project_id' ";
// $result=mysqli_query($conn,$sql);

//=====update coursereg===========
$sql5 = "UPDATE coursereg SET course_status = '$project_status', progress = '$course_progress' WHERE user_email='$student_email' and course_code = '$course_code'";
$result5=mysqli_query($conn,$sql5);
//===============

echo "<script>
alert('Your final review submission is successful.')
window.location.href='dashboardcheck';
</script>";
?>