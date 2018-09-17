<?php
require_once('quote_admin_mobistore/includes/auth_new.php');
require_once('quote_admin_mobistore/includes/functions.php');
unset($_SESSION['LOGIN_STATUS']);
unset($_SESSION['User_name']);
unset($_SESSION['User_id']);
$message2 = "You have been logged out";
    echo "<script type='text/javascript'>alert('$message2');window.location.href='log_in.html';</script>";
	
session_write_close();

exit();
?>