<?php

include('dbconfig.php');

$user_email = $_SESSION['user_email'];
$user_pass = $_REQUEST['user_pass'];
$user_pass1 = $_REQUEST['user_pass1'];
//------check for password

if($user_pass == $user_pass1) {
	goto a;
}
else{

	echo "<script>
alert('Password do not match, re-enter again.')
window.location.href='resetpassword1.php';
</script>";
}
exit;
//======

a:
$sql = "UPDATE training SET  user_pass = '$user_pass' WHERE user_email = '$user_email' ";
$result=mysqli_query($conn,$sql);
//=================================
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Password reset successful, login into your account.')
window.location.href='login.php';
</script>";
?>