<?php
include('dbconfig.php');

$_SESSION['week_no'] = 1 ;
$_SESSION['outline'] = "Introduction to Social Media Management & Content Creation";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>