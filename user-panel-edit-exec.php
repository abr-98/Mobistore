<?php 
require_once('startup.php');
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
  </div>
</body>
</html> 