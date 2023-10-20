<?php
include('dbconfig.php');

$_SESSION['week_no'] = 4 ;
$_SESSION['course_name'] = "Customer Support";

echo "<script>
window.location.href='bootcamp_courseschedule';
</script>";

?>