<?php
include('dbconfig.php');

$useremail=$_SESSION['user_email']; 

$course_type = "FREELANCE BOOTCAMP";
$course_type1 = "Freelance Bootcamp Partial Scholarship";
$course_name = "CUSTOMER SUPPORT";
$_SESSION['course_type'] = $course_type;
$_SESSION['course_type1'] = $course_type1;
$_SESSION['course_name'] = $course_name;

$sql="SELECT * FROM paytransaction WHERE user_email='$useremail' and course_code='$course_type' or course_code='$course_type1' and pay_status='Successful' ";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

echo "<script>
window.location.href='bootcamp_dashboard';
</script>";
}

else{

echo "<script>
alert('You have not paid for this course.');
window.location.href='../index';
</script>";
}
?>