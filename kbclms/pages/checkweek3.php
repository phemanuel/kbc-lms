<?php
include('dbconfig.php');

$_SESSION['week_no'] = 3 ;
$_SESSION['outline'] = "Social Media Management Tools and Promotion";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>