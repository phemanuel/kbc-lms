<?php
include('dbconfig.php');

$_SESSION['week_no'] = 5 ;
$_SESSION['outline'] = "Canva Design";

echo "<script>
window.location.href='courseschedule';
</script>";

?>