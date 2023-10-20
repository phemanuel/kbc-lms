<?php
include('dbconfig.php');

$_SESSION['week_no'] = 2 ;
$_SESSION['outline'] = "Mastering Content Creation and Strategy";

echo "<script>
window.location.href='courseschedule.php';
</script>";

?>