<?php
include('dbconfig.php');

$_SESSION['week_no'] = 1 ;
$_SESSION['outline'] = "Introduction to Social Media Management";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>