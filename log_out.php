<?php
require_once('quote_admin_mobistore/includes/auth_new.php');
require_once('quote_admin_mobistore/includes/functions.php');
unset($_SESSION['LOGIN_STATUS']);
unset($_SESSION['User_name']);
unset($_SESSION['User_id']);
setErrMsg('You have been logged out');
session_write_close();
header('location: log_in.html');
exit();
?>