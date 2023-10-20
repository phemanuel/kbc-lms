<?php
include('dbconfig.php');

$_SESSION['week_no'] = 6 ;
$_SESSION['outline'] = "Freelancing";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>