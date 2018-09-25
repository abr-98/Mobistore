<?php 
require_once('startup.php');
$user_id=intval($_GET['mid']);
$rs = mysqli_query($conn,"select * from user_comments WHERE user_id='$user_id'");
if(mysqli_num_rows($rs)==0)
{
 header('location: manage-comments.php');
 exit();
 }
$row = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Comment Detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1> Comments Detail</h1>
<div id="ctxmenu"><a href="manage-comments.php">Comments detail</a>	</div>
<br><br>
<table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
  <tr>
    <th width="21%">name</th>
    <td width="79%"><?php echo $row['name'];?></td>
  </tr>
  <tr>
    <th>Email Adress </th>
    <td><?php echo $row['email'];?></td>
  </tr>
  <tr>
    <th>Comments</th>
    <td><?php echo $row['comment'];?></td>
  </tr>
  <tr><td colspan="2" align="left"> 
  <?php
if(isset($_POST['delete']))
{
$sql = "DELETE FROM user_comments WHERE name LIKE '%$row[name]%'" ;

//mysql_select_db('grafix_clients');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "<font color='#ff0000'><b>Displayed Record has been deleted Successfully\n<b></font>";?>
</tr></table>
<div id="footer"><?php include('includes/footer.php');?></div>
</table>
  </div>
	<div style="clear:both "></div>
  </div>
  <div id="footer"><?php include('includes/footer.php');?></div></div>
<?php
exit();
}
?>
<table width="15%"  border="0" cellpadding="0" cellspacing="0">
<tr><th>
<form method="post" action="<?php $_PHP_SELF ?>">
<input name="delete" type="submit" id="delete" value="Delete" />
</form></th><th>
<form method="post" action="comment-edit.php">
<input name="user_id" type="hidden" value="<?php echo ($user_id); ?>" />
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