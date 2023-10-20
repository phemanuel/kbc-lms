<?php
include('dbconfig.php');

$user_email = $_SESSION['user_email'];

//----get total course enrolled for----
$sql1="SELECT * FROM coursereg WHERE user_email='$user_email' and course_code='FREELANCE BOOTCAMP'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

if($count1==1) {
	goto a;
}
else{
echo "<script>
alert('You have not enrolled for this course.');
window.location.href='bootcamp_dashboardcheck';
</script>";

}

exit;

a:
$_SESSION['week_no'] = 1 ;
$_SESSION['course_name'] = "Social Media Management";

echo "<script>
window.location.href='bootcamp_courseschedule';
</script>";

?>