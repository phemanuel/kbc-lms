<?php
include('dbconfig.php');

$_SESSION['week_no'] = 2 ;
$_SESSION['course_name'] = "Virtual Assistance";

echo "<script>
window.location.href='bootcamp_courseschedule';
</script>";

?>