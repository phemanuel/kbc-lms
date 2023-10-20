<?php
 //session_start(); 
 
  //staff login
include_once 'dbconfig.php';



// username and password sent from form 

$useremail=$_REQUEST['user_email']; 
$userpass=$_REQUEST['user_pass']; 
$clientpass=$_REQUEST['user_pass']; 
$_SESSION['user_email'] = $useremail ;
$_SESSION['user_pass'] = $userpass ;
$_SESSION['course_code'] = "FREELANCE BOOTCAMP" ;



$sql="SELECT * FROM adminlog WHERE user_email='$useremail' and user_pass='$userpass'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
while($rowval = mysqli_fetch_array($result))
 {

$user_name = $rowval['user_name'];
$pic_dir = $rowval['pic_dir'];

$_SESSION['user_name'] = $rowval['user_name'];
$_SESSION['pic_dir'] = $rowval['pic_dir'];

//$picnamekeep= $rowval['picturename'];


}
echo "<script>
window.location.href='dashboard';
</script>";

}
else {
echo "<script>
alert('Invalid Email address or password.');
window.location.href='index';
</script>";

}



?>
