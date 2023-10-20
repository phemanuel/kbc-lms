<?php


include('dbconfig.php');


$user_email = $_REQUEST['user_email'];
$_SESSION['user_email'] = $user_email;

$sql1="SELECT * FROM training WHERE user_email='$user_email'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count1==1){
echo "<script>
window.location.href='resetpassword1.php';
</script>";
}
else {

echo "<script>
alert('Email is invalid.');
window.location.href='resetpassword.php';
</script>";
}


?>