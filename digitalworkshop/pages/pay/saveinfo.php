<?php
 include ('dbconfig.php'); 
//session_start();

//------participant details------
$email_addy= $_SESSION['email_addy'] ;
$mobile_no= $_SESSION['mobile_no'] ;
$course_name = $_SESSION['course_name'] ;
$course_code = $_SESSION['course_code'] ;
$last_name = $_SESSION['last_name'];
$first_name = $_SESSION['first_name'];
$pay_type = "Course Registration";
$response_code = "0";
$response_desc="Approved by Financial Institution";


//----------voter info------------------
$emailaddy = $_SESSION['cus_email'] ;
$_SESSION['user_email'] = $_SESSION['cus_email'] ;
$amount =  $_SESSION['cus_amount'];
$amount =  ($amount / 100) ;
//$status  = $_SESSION['status'];
$status  = "Successful";
$reference = $_SESSION['reference'] ;


//========other
$date1= date('Y-m-d') ;
$time1 = date("h:i:sa") ;
$votes = ($amount / 100) ;

//------check and save voter email-------------
$sql="SELECT * FROM training WHERE user_email='$emailaddy'";

			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);
if($count==1){

goto a;
}
else{
goto b;
}

exit;

a:

$sql1="INSERT INTO paytransaction (transref,last_name,first_name,amount,user_email,mobile_no,pay_type,course_code,date1,datekeep,pay_status,response_code,response_desc,time1)
VALUES
('$reference','$last_name','$first_name','$amount','$emailaddy','$mobile_no','$pay_type','$course_code','$date1','$date1','$status','response_code','$response_desc','$time1')";
if (!mysqli_query($conn,$sql1))
{
die('error:' . mysqli_error());
}
header("location: ../courseenroll");
exit;

b:

header("location: error");





?>