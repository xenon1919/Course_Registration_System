<?php
session_start();
include("includes/config.php");
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($bd, "UPDATE userlog  SET logout = '$ldate' WHERE studentRegno = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();
$_SESSION['errmsg']="You have been successfully logged out";
?>
<script language="javascript">
document.location="index.php";
</script>
