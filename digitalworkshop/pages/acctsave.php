<?php
include('dbconfig.php');

$user_email = $_REQUEST['user_email'] ;
$user_pass = $_REQUEST['user_pass'] ;
$datekeep = date('Y-m-d') ;


$sql="SELECT * FROM training WHERE user_email='$user_email'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	echo "<script>
alert('An account has been created with this email address, try using another email.');
window.location.href='sign-up';
</script>";
}
else{

	goto d;
}

exit;

d:
//------save information------

$sql="INSERT INTO training (user_email,user_pass,pic_dir,datekeep)
VALUES
('$user_email','$user_pass', 'profilepic.jpg','$datekeep')";



//$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Account has been created, login to update your account.');
window.location.href='../coursepage/';
</script>";

mysqli_close($conn);


?>