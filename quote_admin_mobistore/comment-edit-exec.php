<?php 
require_once('startup.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Updated Comments Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>Updated Comments Details</h1>
<div id="ctxmenu"><a href="manage-comments.php">Comments Details</a>	</div>
<br><br>

<?php
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$sql = "UPDATE user_comments SET name='$name', email='$email', comment='$comment' WHERE user_id='$user_id'";

//mysql_select_db('grafix_clients');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not edit data: ' . mysqli_error());
}
echo "<b>Record has been successfully updated with following data:\n</b><br><br>";
echo ("<b>name:</b> $name <br>");
echo ("<b>email:</b> $email <br>");
echo ("<b>comment:</b> $comment <br>");


$rs = mysqli_query($conn,"select * from user_comments WHERE user_id='$user_id'");
if(mysqli_num_rows($rs)==0)
{
 header('location: manage-comments.php');
 exit();
 }
 
$row = mysqli_fetch_assoc($rs);
?>
</div>
	<div style="clear:both "></div>
  </div>
  <div id="footer"><?php include('includes/footer.php');?></div></div>
</body>
</html> 