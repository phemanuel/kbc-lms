<?php
include('dbconfig.php');

$_SESSION['week_no'] = 4 ;
$_SESSION['outline'] = "Community Engagement and Analytics";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>