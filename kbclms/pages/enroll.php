<?php
include('dbconfig.php');

$useremail = $_SESSION['user_email'] ;
$course_code = $_SESSION['course_code'] ;

//------check payment status for this course-----
$sql1="SELECT * FROM paytransaction WHERE user_email='$useremail' and course_code='$course_code' and pay_status='Successful'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

if($count1== 1){
  //====== 

goto sm;
}
else{

 echo "<script>
alert ('You have not paid for this course.');
window.location.href='billing.php';
</script>";
}
//======

exit;

sm:
if ($course_code=="SMM BLUEPRINT"){

$sql="SELECT * FROM courselist WHERE course_code='$course_code'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
while($rowval = mysqli_fetch_array($result))
 {

$course_name = $rowval['course_name'];
$course_id = $rowval['course_id'];
$course_duration = $rowval['course_duration'];

}
}

	goto smm;
}
else{

	echo "<script>
alert('No course available for enrollment.');
window.location.href='profile.php';
</script>";
}

exit;

smm:

//----to enroll a student for a course----

$user_email = $_SESSION['user_email'] ;

$sql1="SELECT * FROM training WHERE user_email='$user_email'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

// If result matched $myusername and $mypassword, table row must be 1 row
#if($count1==1){
while($rowval = mysqli_fetch_array($result1))
 {

$last_name = $rowval['last_name'];
$first_name = $rowval['first_name'];
$student_id = $rowval['id'];
$student_name = $last_name . " " . $first_name ;

}
#}


$datekeep = date('Y-m-d') ;


//------save information------

$sql="INSERT INTO coursereg (user_email,course_name,course_code,student_name,progress,course_duration,current_stage,course_id,student_id,course_status)
VALUES
('$user_email','$course_name','$course_code','$student_name','0','$course_duration','1','$course_id','$student_id','In progress')";



//$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Enrollment successful, you can continue your course.');
window.location.href='dashboardcheck.php';
</script>";

mysqli_close($conn);


?>