<?php
include ('dbconfig.php');

$useremail = $_SESSION['user_email'] ;
$course_code = $_SESSION['course_code'];
//----get total course enrolled for----
$sql1="SELECT * FROM coursereg WHERE user_email='$useremail' and course_code='$course_code' ";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

if($count1== 1){
  //======
while($rowval = mysqli_fetch_array($result1))
 {

$progress = $rowval['progress'];
$course_status = $rowval['course_status'];
$current_stage = $rowval['current_stage'];
} 
goto a;
}

else{
 echo "<script>
alert ('You have not enrolled for this course.');
window.location.href='dashboardcheck.php';
</script>";

}
//=====
 exit;

 //======check for the current stage=====

a:

if ($current_stage==5) {

	echo "<script>

window.location.href='../coursepage/courseweek5.php';
</script>";

}
elseif ($current_stage < 5) {
 echo "<script>
alert ('You have not completed previous lesson, therefore you cannot access the next lesson.');
window.location.href='coursepage.php';
</script>";

}
?>