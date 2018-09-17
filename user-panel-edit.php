<?php 
require_once('startup.php');
$User_id=$_POST['User_id'];

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
<div id="ctxmenu"><a href="manage-users.php">User Details</a>	</div>
<br><br>

<form method="post" action="user-panel-edit-exec.php">
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
  </div>
</body>
</html> 	