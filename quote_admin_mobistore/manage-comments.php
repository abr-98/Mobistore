<?php 
require_once('startup.php');
require_once('includes/ps_pagination.php');
$sql = 'SELECT * from user_comments';
$pager = new PS_Pagination($conn, $sql, 25);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Manage Comments</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="mobistore.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="container">
 <div id="header"><?php include('includes/header.php');?></div>
 <div id="contentarea"> 
 <div id="leftcolumn"><?php include('includes/link.php');?></div>  
  <div id="contents">
<h1>MANAGE COMMENTS</h1>
            
    <table width="100%"  border="0" cellpadding="2" cellspacing="0" class="formtable">
      <tr class="grid">
        <th width="15%">Name</th>
         <th width="15%">Email</th>
         <th width="15%">Comments</th>
		 
        </tr>
	  <?php
			   $rs = $pager->paginate();
			   while($row=mysqli_fetch_assoc($rs))
				{ ?>
      <tr>
        <td><a href="comment-detail.php?mid=<?php echo $row['user_id'];?>" title="Click to View/Edit/Delete"><?php echo $row['name'];?></a></td>
                <td><?php echo $row['email'];?></td> 
                	<td><?php echo $row['comment'];?></td>
				
        </tr>
	  <?php } ?>
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
  <div id="footer"><?php include('includes/footer.php');?></div>
</body>
</html> 