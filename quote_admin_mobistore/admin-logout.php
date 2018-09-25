<?php
require_once('includes/auth.php');
require_once('includes/functions.php');
unset($_SESSION['LOGIN_STATUS']);
unset($_SESSION['admin_login']);
unset($_SESSION['admin_id']);
setErrMsg('You have been logged out');
session_write_close();
header('location: log_in.html');
exit();
?>