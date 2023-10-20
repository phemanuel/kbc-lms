<?php
include('dbconfig.php');

$user_email = $_SESSION['user_email'] ;
$course_code = $_SESSION['course_code'];
$course_name = $_REQUEST['course_name'];

if($course_name=="Social Media Management"){
	$week_no = 1;
}
elseif($course_name=="Virtual Assistance"){
	$week_no = 2;
}
elseif($course_name=="Lead Generation"){
	$week_no = 3;
}
elseif($course_name=="Customer Support"){
	$week_no = 4;
}
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
#}


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

//$course_name = $rowval['course_name'];
$course_id = $rowval['course_id'];
$course_duration = $rowval['course_duration'];

}
//=====check if assessment has been submitted already--------------

$sql2="SELECT * FROM bootcamp_project WHERE user_email='$user_email' and course_code='$course_code' and course_name = '$course_name'";
$result2=mysqli_query($conn,$sql2);

// Mysql_num_row is counting table row
$count2=mysqli_num_rows($result2);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count2==1){

	echo "<script>
alert('Project for this course has already been submitted.');
window.location.href='bootcamp_project';
</script>";
}
else{

	goto d;
}

exit;
d:
//=====================
//----get total course enrolled for----
$sql1="SELECT * FROM coursereg WHERE user_email='$user_email' and course_code = '$course_code'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

  //======
while($rowval = mysqli_fetch_array($result1))
 {

$current_stage = $rowval['current_stage'];
$progress = $rowval['progress'];
}
 //=====

// if ($current_stage < $week_no ) {
// 	echo "<script>
// alert('You have not uploaded assessment for previous session.');
// window.location.href='assesment.php';
// </script>";
	
// }
// elseif ($current_stage >= $week_no ) {
// 	goto up;
// }

// exit;


// up:
//=======upload picture


if(isset($_FILES['file'])){

$file= $_FILES['file'];

$upload_directory='../uploads/project/';

//$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$ext_str = "pdf";

$allowed_extensions=explode(',',$ext_str);

$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */

$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

if (!in_array($ext, $allowed_extensions) ) {

echo "only".$ext_str." files allowed to upload"; // exit the script by warning

} /* check file size of the file if it exceeds the specified size warn user */

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$picname = substr($user_email, 0, 5);
//$path= $applicationno .'.'.$ext;
$path= $picname ."_" . $course_name . "_" . rand(1000,100000) .'.pdf';
//$docnamekeep= $useremail .'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
//include "dbconfig.php";
//========insert into db

$sql3="INSERT INTO bootcamp_project (user_email,course_id,student_id,course_name,student_name,date_submit,lapse_date,file_dir,course_code,review_status,review_comment,week)
VALUES
('$user_email','$course_id', '$student_id','$course_name','$student_name','$datekeep','$datekeep','$path','$course_code','In review','n/a',$week_no)";

//-------update current stage====
// $current_stage = $current_stage + 1 ;
// $progress = $progress + 20 ;
// $sql4= "UPDATE coursereg SET current_stage='".$current_stage."', progress='".$progress."' WHERE user_email='".$user_email."' and course_code='$course_code' ";
// //$result = mysqli_query($conn, $sql );
// $result4=mysqli_query($conn,$sql4);

//$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql3))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Project has been uploaded successfully.');
window.location.href='bootcamp_project';
</script>";

mysqli_close($conn);
}
else{

echo "<script>
alert('Error while uploading project.');
window.location.href='bootcamp_project';
</script>";
}

}


?>