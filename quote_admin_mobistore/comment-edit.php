<?php 
require_once('startup.php');
$user_id=$_POST['user_id'];

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
<title>Editing comment Details</title>
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
<h1>Updating Comment Details</h1>
<div id="ctxmenu"><a href="manage-comments.php">Comment Details</a>	</div>
<br><br>

<form method="post" action="comment-edit-exec.php">
<input name="user_id" type="hidden" value="<?php echo ($user_id); ?>">
<table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
  <tr>
    <th width="15%">name</th>
    <td width="85%"><input type="text" name="name" value="<?php echo $row['name'];?> " onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th width="15%">email</th>
    <td width="85%"><input type="text" name="email" value="<?php echo $row['email'];?> " onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>comments</th>
    <td><input type="text" name="comment" value="<?php echo $row['comment'];?>" onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  
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