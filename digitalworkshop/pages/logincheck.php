<?php

include_once 'dbconfig.php';

// username and password sent from form 

$useremail=$_REQUEST['user_email']; 
$userpass=$_REQUEST['user_pass']; 
$clientpass=$_REQUEST['user_pass']; 
$_SESSION['clientpass'] = $clientpass;
$_SESSION['user_email'] = $useremail ;
$_SESSION['user_pass'] = $userpass ;
$_SESSION['course_code'] = "DIGITAL SKILLS WORKSHOP" ;

//========check if user has watch welcome video-----
$sql1="SELECT * FROM training WHERE user_email='$useremail' and expectation_val= '1'";
$result1=mysqli_query($conn,$sql1);

// Mysql_num_row is counting table row
$count1=mysqli_num_rows($result1);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count1==1){

goto g;
}
else{
echo "<script>
alert('Please watch the welcome video before you can access the lessons.');
window.location.href='../coursepage/welcome_video';
</script>";
}

exit;

g:

$sql="SELECT * FROM training WHERE user_email='$useremail' and user_pass='$userpass' ";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
while($rowval = mysqli_fetch_array($result))
 {

$lastname = $rowval['last_name'];
$firstname = $rowval['first_name'];
$phoneno = $rowval['phone_no'];
$pic_dir = $rowval['pic_dir'];
$account_status = $rowval['account_status'];

$_SESSION['lastname'] = $rowval['last_name'];
$_SESSION['firstname'] = $rowval['first_name'];
$_SESSION['phoneno'] = $rowval['phone_no'];

//$picnamekeep= $rowval['picturename'];


}
goto d ;

}
else {
echo "<script>
alert('Invalid Email address or password.');
window.location.href='login';
</script>";

}

exit;

d:
    
    if ($account_status == 1) {
         echo "<script>
window.location.href='dashboard';
</script>";
        
    }
    elseif ($account_status == 0) {
         echo "<script>
         alert('Your account has been deactivated, please send a mail to emmanexitconsult@gmail.com.')
window.location.href='login';
</script>";
   
}
?>
