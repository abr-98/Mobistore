<?php
require_once('quote_admin_mobistore/includes/dbconn.php');
require_once('quote_admin_mobistore/includes/functions.php');
require_once('quote_admin_mobistore/includes/auth_new.php');

$usr_name = trim($_POST['usr_name']);
$passwd = md5(trim($_POST['passwd']));

$rs = mysqli_query($conn, "SELECT * FROM user_description WHERE User_name='$usr_name'");
$row = mysqli_fetch_assoc($rs);

$selection = "SELECT * FROM user_description WHERE User_name='$usr_name' and Password='$passwd'";

if(!$rs || mysqli_num_rows($rs) == 0) {
	$message = "You are not registerd ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='log_in.html';</script>";
	
	session_write_close();
	
	exit();
}



if(!empty($passwd) && ($passwd != $row['Password']))
{
	$message2 = "please enter correct password";
    echo "<script type='text/javascript'>alert('$message2');window.location.href='log_in.html';</script>";
	
	  session_write_close();
	  
  
  exit();
  
}
session_regenerate_id();
$_SESSION['LOGIN_STATUS'] = 1;
$_SESSION['User_name'] = $row['User_name'];
$_SESSION['User_id'] = $row['User_id'];

session_write_close();
header('location: home_page_session.html');
?>