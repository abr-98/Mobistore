<?php 
require_once('startup.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ediiting Quote Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="grafix.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>Updating Quote Details</h1>
<div id="ctxmenu"><a href="menage-quotes.php">Quotes Requests</a>	</div>
<br><br>

<?php
$quoteid=$_POST['quoteid'];

if(isset($_POST['save']))
{
$name = $_POST['name'];
$date = 'date';
$email = 'email';
$jobtype = 'jobtype';
$quality = 'quality';
$delivery = 'delivery';

$sql = "UPDATE gr_quotes SET name = $name WHERE quote_id='$quoteid'";

//mysql_select_db('grafix_clients');
$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not edit data: ' . mysql_error());
}
echo "Displayed Record has been saved Successfully\n";
exit();
}

$rs = mysql_query("select * from gr_quotes WHERE quote_id='$quoteid'");
if(mysql_num_rows($rs)==0)
{
 header('location: menage-quotes.php');
 exit();
 }
$row = mysql_fetch_assoc($rs);
?>

<form method="post" action="<?php $_PHP_SELF ?>">
<table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
  <tr>
    <th width="15%">Name</th>
    <td width="85%"><input type="text" name="name" value="<?php echo $row[name];?> " onfocus="setValue(this)" onblur="setValue(this)"></td>
  </tr>
  <tr>
    <th>Date</th>
    <td><input type="text" name="date" value="<?php echo $row[date];?> "></td>
  </tr>
  <tr>
    <th>Email Id </th>
    <td><input type="text" name="email" value="<?php echo $row[email];?> "></td>
  </tr>
  <tr>
    <th>Job Type </th>
    <td><input type="text" name="jobtype" value="<?php echo $row[jobtype];?> "></td>
  </tr>
  <tr>
    <th>Quality</th>
    <td><input type="text" name="quality" value="<?php echo $row[quality];?> "></td>
  </tr>
  <tr>
    <th>Delivery</th>
    <td><input type="text" name="delivery" value="<?php echo $row[delivery];?> "></td>
  </tr>
  <tr>
    <th>Comments</th>
    <td><?php echo $row['comment'];?></td>
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