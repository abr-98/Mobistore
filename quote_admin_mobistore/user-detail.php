<?php 
require_once('startup.php');
$User_id=intval($_GET['mid']);
$rs = mysqli_query($conn,"select * from user_description WHERE User_id='$User_id'");
if(mysqli_num_rows($rs)==0)
{
 header('location: manage-users.php');
 exit();
 }
$row = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>Viewing / Deleting users Details</h1>
<div id="ctxmenu"><a href="manage-users.php">User details</a>	</div>
<br><br>
<table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
  <tr>
    <th width="15%">user_name</th>
    <td width="85%"><?php echo $row['User_name'];?></td>
  </tr>
  <tr>
    <th width="15%">Name</th>
    <td width="85%"><?php echo $row['Name'];?></td>
  </tr>
  <tr>
    <th>Date</th>
    <td><?php echo $row['date'];?></td>
  </tr>
  <tr>
    <th>Email Id </th>
    <td><?php echo $row['Email'];?></td>
  </tr>
  <tr>
    <th>Recovery  mail </th>
	<td><?php echo $row['Recovery_mail'];?></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><?php echo $row['Phone'];?></td>
  </tr>
  
  <tr><td colspan="2" align="left"> 
  <?php
if(isset($_POST['delete']))
{
$sql = "DELETE FROM user_description WHERE User_name LIKE '%$row[User_name]%'" ;

//mysql_select_db('grafix_clients');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "<font color='#ff0000'><b>Displayed Record has been deleted Successfully\n<b></font>";?>
</tr></table>
<div id="footer"><?php include('includes/footer.php');?></div>
<?php
exit();
}
?>
<table width="15%"  border="0" cellpadding="0" cellspacing="0">
<tr><th>
<form method="post" action="<?php $_PHP_SELF ?>">
<input name="delete" type="submit" id="delete" value="Delete" />
</form></th><th>
<form method="post" action="details-edit.php">
<input name="User_id" type="hidden" value="<?php echo ($User_id); ?>" />
<input name="edit" type="submit" id="delete" value="Edit" />
</form> </th></tr></table>
 
  </th>
  </tr>
  </table>
 </div>
	<div style="clear:both "></div>
  </div>
  <div id="footer"><?php include('includes/footer.php');?></div></div>
</body>
</html> 