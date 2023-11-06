<?php

include('dbconfig.php');

$useremail = $_SESSION['user_email'] ;

$last_name = $_REQUEST['last_name'];
$first_name = $_REQUEST['first_name'];
$phone_no = $_REQUEST['phone_no'];
$profile_info = $_REQUEST['profile_info'];
$country_name = $_REQUEST['country_name'];
$occupation = $_REQUEST['occupation'];
//------check for password


$sql = "UPDATE training SET  last_name= '$last_name', first_name='$first_name', phone_no='$phone_no',profile_info='$profile_info',country='$country_name', occupation='$occupation' WHERE user_email = '$useremail' ";
$result=mysqli_query($conn,$sql);
//=================================
if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

echo "<script>
alert('Account update successful.')
window.location.href='profile';
</script>";
?>