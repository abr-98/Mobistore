<?php 
require_once('startup.php');
require_once('includes/ps_pagination.php');
$sql = 'SELECT * from user_description';
$pager = new PS_Pagination($conn, $sql, 15);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Manage Users</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>MANAGE USERS</h1>
            
    <table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
      <tr class="grid">
        <th width="15%">User_name</th>
		<th width="15%">Name</th>
         <th width="15%">Email</th>
         <th width="15%">Recovery_mail</th>
		 <th width="15%">date</th>
		 <th width="15%">Password</th>
		 <th width="15%">Phone</th>
        </tr>
	  <?php 
			  $rs = $pager->paginate();
			  while($row =mysqli_fetch_assoc($rs)) {?>
        <td><a href="user-detail.php?mid=<?php echo $row['User_id'];?>" title="Click to View/Edit/Delete"><?php echo $row['User_name'];?></a></td>
                <td><?php echo $row['Name'];?></td>
				<td><?php echo $row['Email'];?></td> 
                	<td><?php echo $row['Recovery_mail'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['Password'];?></td>
				<td><?php echo $row['Phone'];?></td>
        </tr>
	  <?php }?>
    </table>
    <div align="center"><br>
        <br>
	    <?php
	echo $pager->renderFirst()."&nbsp;";
	echo $pager->renderNav()."&nbsp;";
	echo $pager->renderLast()."&nbsp;";
	?>
    </div>
  </div>
	<div style="clear:both "></div>
  </div>
  <div id="footer"><?php include('includes/footer.php');?></div></div>
</body>
</html> 