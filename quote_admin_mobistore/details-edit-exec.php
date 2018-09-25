<?php 
require_once('startup.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Updated User Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>Updated Users Details</h1>
<div id="ctxmenu"><a href="manage-users.php">User Details</a>	</div>
<br><br>

<?php
$User_id=$_POST['User_id'];
$User_name=$_POST['User_name'];
$Name = $_POST['Name'];
$date = $_POST['date'];
$Email = $_POST['Email'];
$Recovery_mail = $_POST['Recovery_mail'];
$Phone = $_POST['Phone'];


$sql = "UPDATE user_description SET User_name='$User_name',Name='$Name', date='$date', Email='$Email',Recovery_mail='$Recovery_mail', Phone='$Phone' WHERE User_id='$User_id'";

//mysql_select_db('grafix_clients');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not edit data: ' . mysqli_error());
}
echo "<b>Record has been successfully updated with following data:\n</b><br><br>";
echo ("<b>User_name:</b> $User_name <br>");
echo ("<b>Name:</b> $Name <br>");
echo ("<b>Date:</b> $date <br>");
echo ("<b>E-mail:</b> $Email <br>");
echo ("<b>Recovery_mail:</b> $Recovery_mail <br>");
echo ("<b>Phone:</b> $Phone <br>");


$rs = mysqli_query($conn,"select * from user_description WHERE User_id='$User_id'");
if(mysqli_num_rows($rs)==0)
{
 header('location: manage-users.php');
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