<?php 
require_once('quote_admin_mobistore/includes/dbconn.php');
require_once('quote_admin_mobistore/includes/functions.php');



//variable delaration

$usr_name=trim($_POST['usr_name']);
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$recovery_mail=trim($_POST['recovery_mail']);
$date=trim($_POST['date']);
$passwd=md5(trim($_POST['password']));
$confirmpasswd=md5(trim($_POST['confirmpassword']));
$phone=trim($_POST['phone']);;

	$sql = "SELECT * FROM user_description WHERE User_name='$usr_name'";
  	$results = mysqli_query($conn,$sql);
  	if (mysqli_num_rows($results) > 0) {
  	  $message = "user_name exists please try some other name ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='sign_up.html';</script>";
	
	  session_write_close();
  
  
  exit();
  
	}
	

//sign up
if(!empty($passwd))
{
$sql = "INSERT INTO  user_description (User_name,Name,Email,Recovery_mail,date,Password,Phone) VALUES ('$usr_name','$name','$email','$recovery_mail','$date','$passwd','$phone')";
$result = @mysqli_query($conn,$sql);

if(!$result)
{
  $message = "Failed to register.please try again ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='sign_up.html';</script>";
	
  session_write_close();
  //header('location: sign_up.html');
  exit();
  }
  
    $message = "You are registerd now please login";
    echo "<script type='text/javascript'>alert('$message');window.location.href='log_in.html';</script>";
	
	session_write_close();
  
}
?>