<?php
include('dbconfig.php');

$_SESSION['week_no'] = 3 ;
$_SESSION['outline'] = "Introduction to  Virtual Assistance";

echo "<script>
window.location.href='courseschedule';
</script>";

?>