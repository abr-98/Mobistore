<?php 
require_once('startup.php');
$User_id=$_POST['User_id'];

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
<title>Editing User Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
    <script type="text/javascript">
    function setValue(field)
    {
    if(''!=field.defaultValue)
    {
    if(field.value==field.defaultValue)
    {
    field.value='';
    }
    else if(''==field.value)
    {
    field.value=field.defaultValue;
    }
    }
    }
    </script>
 
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>Updating Users Details</h1>
<div id="ctxmenu"><a href="manage-users.php">User Details</a>	</div>
<br><br>

<form method="post" action="details-edit-exec.php">
<input name="User_id" type="hidden" value="<?php echo ($User_id); ?>">
<table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
  <tr>
    <th width="15%">User_name</th>
    <td width="85%"><input type="text" name="User_name" value="<?php echo $row['User_name'];?> " onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th width="15%">Name</th>
    <td width="85%"><input type="text" name="Name" value="<?php echo $row['Name'];?> " onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>Date</th>
    <td><input type="text" name="date" value="<?php echo $row['date'];?>" onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>Email Id </th>
    <td><input type="text" name="Email" value="<?php echo $row['Email'];?>" onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>Recovery_mail </th>
    <td><input type="text" name="Recovery_mail" value="<?php echo $row['Recovery_mail'];?>" onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><input type="text" name="Phone" value="<?php echo $row['Phone'];?>" onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  
  <tr><th></th>
  <th align="center">  

<input name="save" type="submit" id="save" value="Save">
</form>
 
  </th>
  </tr>
  
  
  
  
  
  
</table>
 </div>
	<div style="clear:both "></div>
  </div>
  <div id="footer"><?php include('includes/footer.php');?></div></div>
</body>
</html> 