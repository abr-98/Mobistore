<?php 
require_once('quote_admin_mobistore/includes/dbconn.php');
require_once('quote_admin_mobistore/includes/functions.php');


//variable delaration

$name=trim($_POST['name']);
$email=trim($_POST['email']);
$comment=trim($_POST['comment']);



//check for error conditions

//change password
if(!empty($name))
{
$sql = "INSERT INTO user_comments (name, email, comment) VALUES ('$name','$email','$comment')";
$result = @mysqli_query($conn,$sql);

if(!$result)
{
  
  $message = "Failed to register your comment.please try again ";
    echo "<script type='text/javascript'>alert('$message');window.location.href='contact_us_session.html';</script>";
	
  session_write_close();
  //header('location: sign_up.html');
  exit();
  }
  
    $message = "You comments are registered.thank you for your valuable comments";
    echo "<script type='text/javascript'>alert('$message');window.location.href='contact_us_session.html';</script>";
	
	session_write_close();
  
}
?>