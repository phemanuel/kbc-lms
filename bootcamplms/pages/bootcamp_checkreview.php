<?php
include('dbconfig.php');

$project_id = $_GET['id'];

//----get the review status for the project submission----
$sql="SELECT * FROM bootcamp_project WHERE ID='$project_id'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

if($count== 1){
  //======
while($rowval = mysqli_fetch_array($result))
 {

$review_status = $rowval['review_status'];
$review_comment = $rowval['review_comment'];
$_SESSION['review_comment'] = $review_comment;

}
goto a;
}
else{

	echo "<script>

window.location.href='bootcamp_project';
</script>";
}

exit;

a:
//------check the review status----

if ($review_status == "In review") {

	echo "<script>
alert('This submission has not been reviewed.');
window.location.href='bootcamp_project';
</script>";
}
elseif ($review_status == "Reviewed"){

echo "<script>

window.location.href='bootcamp_review';
</script>";

}
elseif ($review_status == "Approved"){

echo "<script>

window.location.href='bootcamp_review';
</script>";

}

?>