<?php 
require_once('quote_admin_mobistore/includes/dbconn.php');
require_once('quote_admin_mobistore/includes/functions.php');

//variable delaration
$usr_name=$_POST['usr_name'];
$oldpasswd=md5(trim($_POST['oldpasswd']));
$newpasswd=md5(trim($_POST['newpasswd']));
$email=trim($_POST['email']);

//acess data from table
$rs = mysqli_query($conn, "select * from user_description where User_name='$usr_name'");
$row = mysqli_fetch_assoc($rs);

//check for error conditions

if(!empty($oldpasswd) && ($oldpasswd != $row['Password']))
{
	$message = "old password does not match";
    echo "<script type='text/javascript'>alert('$message');window.location.href='forgot_password.html';</script>";
	
	  session_write_close();
	  
  
  exit();
  
}
if(!empty($email) && ($email!=$row['Email']))

	{
	$message = "email does not match";
    echo "<script type='text/javascript'>alert('$message');window.location.href='forgot_password.html';</script>";
	
	  session_write_close();
	  
  
  exit();
	}
//change password
if(!empty($newpasswd))
{
$sql = "UPDATE user_description SET Password='".$newpasswd."' WHERE User_name='$usr_name'";
$result = @mysqli_query($conn,$sql);

if(!$result)
{
  $message = "Failed to change password.please try again ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='forgot_password.html';</script>";
	
  session_write_close();
  //header('location: sign_up.html');
  exit();
  }
  
    $message = "You are successful now please login";
    echo "<script type='text/javascript'>alert('$message');window.location.href='log_in.html';</script>";
	
	session_write_close();
  
}
?>