<?php
include('dbconfig.php');

$_SESSION['week_no'] = 3 ;
$_SESSION['course_name'] = "Lead Generation";

echo "<script>
window.location.href='bootcamp_courseschedule';
</script>";

?>