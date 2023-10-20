<?php
include('dbconfig.php');

$useremail = $_SESSION['user_email'] ;
$course_code = $_SESSION['course_code'] ;

$sql1="SELECT * FROM coursereg WHERE user_email='$useremail' and course_code='$course_code'";
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
 

}
else {


}

//========

if($current_stage==1){

	echo "<script>

window.location.href='../coursepage/courseweek1.php';
</script>";

}
elseif($current_stage==2){

	echo "<script>

window.location.href='../coursepage/courseweek2.php';
</script>";

}

elseif($current_stage==3){

	echo "<script>

window.location.href='../coursepage/courseweek3.php';
</script>";

}
elseif($current_stage==4){

	echo "<script>

window.location.href='../coursepage/courseweek4.php';
</script>";
}
else{
echo "<script>

window.location.href='../coursepage/courseweek4.php';
</script>";

}



?>