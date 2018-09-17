<?php 
require_once('startup.php');
$User_id=intval($_GET['mid']);
$rs = mysqli_query($conn,"select * from user_description WHERE User_id='$User_id'");
if(mysqli_num_rows($rs)==0)
{
 header('location: home_page_session.html');
 exit();
 }
$row = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>user details </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quote_admin_mobistore/mobistore.css" rel="stylesheet" type="text/css">
<style>

body{
background-color:cornsilk;
font-family: Arial;
font-size:18px;
line-hieght:20px;
}
#container{
margin:auto;
width:850px;

}
#menu{
	float:left;
	width:850px;
	height:36px;
	background-color:powerblue;
	margin 0;
	padding 0;
	}
	#menu  u1{
	margin:0 0 0 50px;
	padding 0;
	background-color:black;
	list-style: none;
	}
	#menu ul li{
	background-color:powerblue;
	display:inline;
	}
	#menu ul li a{
	float:left;
	width:150px;
	background-color:powerblue;
	hieght:20 px;
	margin-top:8 px;
	padding:0 5px 0 5px;
	font-size:1.2em;
	font-weight:bold;
	text-align:center;
	text decoration:none;
	color:powerblue;
	}
	#menu li a:hover, #menu li .current{
	background-color:white;
}
img
{
clear:both;
float:left;
width:850px;
height:180px;
padding:30px 150px 0 50px;
margin-bottom:25px;
}

#banner
{
clear:both;
float:left;
width :850px;
hieght:80px;
margin: 30px 30px 20px 50px;
padding: 0,80px,0,80px;
text-align: center;
font-size: 20px;
color:white;
background-color:darkred;
}
.image {
   margin-top:15px;
   margin-left:5px;
  }

  .image ul {
   color: #E59934;
  }

  .image ul li {
   margin:12px;
   
   width: 240px;
   height:340px;
   float: left; 
  
   list-style:none;
   
  }

  
</style>
</head>
<body>

<div id="container">
<p><img src="header final.jpg" alt="header image" >
<div id="menu">
<ul>
	<li><a href="http://localhost/mobistore/home_page_session.html">HOME</a></li>
	<li><a href="http://localhost/mobistore/store_session.html ?mid=<?php echo $row['User_id'];?>">VISIT STORE</a></li>
	<li><a href="user_logout.php">LOG OUT</a></li>
	<li><a href="http://localhost/mobistore/about_us_session.html ?mid=<?php echo $row['User_id'];?>">ABOUT US</a></li>
	<li><a href="http://localhost/mobistore/contact_us_session.html ?mid=<?php echo $row['User_id'];?>">CONTACT US</a></li>
</ul>
</div>
<p style="text-align:center;font-size:24px;line-height:3.5em"> Welcome </p>


<div id="banner">
<p>USER DETAILS</p>
</div>
<div id="ctxmenu"><a href="home_page_session.php">HOME PAGE</a>	</div>
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
<form method="post" action="user-panel-edit.php">
<input name="User_id" type="hidden" value="<?php echo ($User_id); ?>" />
<input name="edit" type="submit" id="delete" value="Edit" />
</form> </th></tr></table>
 
  </th>
  </tr>
  </table>
 </div>
	<div style="clear:both "></div>
  </div>
  
</body>
</html> 