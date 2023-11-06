<?php
include('dbconfig.php');

$user_email = $_REQUEST['user_email'] ;
$mobile_no = $_REQUEST['mobile_no'] ;
$user_pass = $_REQUEST['user_pass'] ;
$last_name = $_REQUEST['last_name'] ;
$first_name = $_REQUEST['first_name'] ;
$datekeep = date('Y-m-d') ;

$_SESSION['full_name'] = $last_name." ".$first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['first_name'] = $first_name;
$_SESSION['user_email'] = $_REQUEST['user_email'] ;
$_SESSION['mobile_no'] = $_REQUEST['mobile_no'] ;


$sql="SELECT * FROM training WHERE user_email='$user_email'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	echo "<script>
alert('An account has been created with this email address, try using another email.');
window.location.href='coursesign-up';
</script>";
}
else{

	goto d;
}

exit;

d:
//------save information------

$sql="INSERT INTO training (user_email,user_pass,phone_no,pic_dir,datekeep,last_name,first_name)
VALUES
('$user_email','$user_pass', '$mobile_no','profilepic.jpg','$datekeep','$last_name','$first_name')";



//$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>

window.location.href='pay/';
</script>";

mysqli_close($conn);


?>