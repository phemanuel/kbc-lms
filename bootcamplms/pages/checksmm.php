<?php
include('dbconfig.php');

$_SESSION['week_no'] = 1 ;
$_SESSION['course_name'] = "Social Media Management";

echo "<script>
window.location.href='bootcamp_courseschedule';
</script>";

?>