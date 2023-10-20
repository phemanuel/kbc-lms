<?php
include('dbconfig.php');

$user_email = $_SESSION['user_email'];
$feedback = $_REQUEST['feedback'];
//-=======================
if($feedback == "Yes"){
	$welcome_video = 1;

}
elseif($feedback == "No"){
	$welcome_video = 0;
}

//==========update user================
$sql = "UPDATE training SET  welcome_video= '$welcome_video', feedback='$feedback' WHERE user_email = '$user_email' ";
$result=mysqli_query($conn,$sql);
//=================================
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Your feedback has been recieved, you can proceed to your lesson.')
window.location.href='../pages/bootcamp_dashboard';
</script>";
?>