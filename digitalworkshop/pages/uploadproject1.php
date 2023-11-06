<?php
include('dbconfig.php');

$user_email = $_SESSION['user_email'] ;
$course_code = "SMM BLUEPRINT" ;
//$week_no = $_REQUEST['week_no'] ;
$link_1 = $_REQUEST['link_1'];
$link_2 = $_REQUEST['link_2'];
$link_3 = $_REQUEST['link_3'];
$link_4 = $_REQUEST['link_4'];
$certificate_name = $_REQUEST['certificate_name'];
$week_no = "4" ;
$review_status = "In review";
$review_comment = "";
$datetime = date("Y-m-d H:i:s");

//=====check for valid url-----
$link_1 = test_input($_REQUEST["link_1"]);
$link_2 = test_input($_REQUEST["link_2"]);
$link_3 = test_input($_REQUEST["link_3"]);
$link_4 = test_input($_REQUEST["link_4"]);

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_1)) {
  //$link1_Err = "Invalid URL";
echo "<script>
alert('The link submitted for question 1 is not valid.')
window.location.href='uploadproject';
</script>";
}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_2)) {
  //$link1_Err = "Invalid URL";
echo "<script>
alert('The link submitted for question 2 is not valid.')
window.location.href='uploadproject';
</script>";
}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_3)) {
  //$link1_Err = "Invalid URL";
echo "<script>
alert('The link submitted for question 3 is not valid.')
window.location.href='uploadproject';
</script>";
}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_4)) {
  //$link1_Err = "Invalid URL";
echo "<script>
alert('The link submitted for question 4 is not valid.')
window.location.href='uploadproject';
</script>";
}
else {
	goto r;
}

exit;

r:

//-----check for valid name------
$certificate_name = test_input($_REQUEST["certificate_name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$certificate_name)) {
  //$nameErr = "Only letters and white space allowed";
  echo "<script>
alert('Only letters and white space allowed for name.')
window.location.href='uploadproject';
</script>";
}
else {
	goto y;
}
exit;

y:
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//---------------
//=======get basic info
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

$datekeep = date('Y-m-d') ;

//====================
//==== get course details------------------
$sql="SELECT * FROM courselist WHERE course_code='$course_code'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

while($rowval = mysqli_fetch_array($result))
 {

$course_name = $rowval['course_name'];
$course_id = $rowval['course_id'];
$course_duration = $rowval['course_duration'];

}

//---insert project for review------
$sql3="INSERT INTO project (user_email,course_id,student_id,course_name,student_name,date_submit,lapse_date,file_dir1,file_dir2,file_dir3,file_dir4,certificate_name,week,course_code,review_status,review_comment)
VALUES
('$user_email','$course_id', '$student_id','$course_name','$student_name','$datetime','$datekeep','$link_1','$link_2','$link_3','$link_4','$certificate_name','$week_no','$course_code','$review_status','$review_comment')";
$result3=mysqli_query($conn,$sql3);

//-------update current stage====
$current_stage = "4" ;
$progress = "80" ;
$sql4= "UPDATE coursereg SET current_stage='".$current_stage."', progress='".$progress."' WHERE user_email='".$user_email."' and course_code='$course_code' ";
//$result = mysqli_query($conn, $sql );
$result4=mysqli_query($conn,$sql4);

// if (!mysqli_query($conn,$sql3))
// { 
// die('error:' . mysqli_error($conn));
// }
echo "<script>
alert('Project submitted sucessfully and is under review.')
window.location.href='dashboardcheck';
</script>";
?>