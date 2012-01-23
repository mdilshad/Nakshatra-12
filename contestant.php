<?php 
$dbconn = pg_pconnect("host=localhost dbname=dilshad user=dilshad") or die("Connection error..!!"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <title>Suggestion Log</title>
<style>
.mod1 {
color:#1B5D89;
font-weight:bold;
font-size:14px;
}
</style>
<link rel="stylesheet" href="placement/system.css" type="text/css">
<link rel="stylesheet" href="placement/general.css" type="text/css">
<link href="placement/template.css" rel="stylesheet" type="text/css">
<link href="placement/suckerfish.css" rel="stylesheet" type="text/css">
<link href="placement/body_beige.css" rel="stylesheet" type="text/css">
<link href="placement/primary_red.css" rel="stylesheet" type="text/css">

<link href="placement/rokzoom.css" rel="stylesheet" type="text/css">
</head><body id="page_bg" class="b-medium p-red bd-beige">

<div class="wrapper">
<div class="mainbg">
<div id="header"><a href="" class="nounder"><img src="placement/logo.jpg" alt="image not availevel" border="2" height="100" width="800"></a>
<div id="scroller"></div>
<div id="header_spotlight">
<div id="topbox"></div>
<div id="searchbox"></div></div></div>
<div id="safari">
<div id="nav_suckerfish">
<ul class="menu">
<li class="item75"><a href="" target="_blank"><span>Contstants</span></a></li>

</ul></div></div>



<table class="mainbg" cellpadding="0" cellspacing="0">
<tbody><tr valign="top">
<td class="main">
<div class="mainbody">
<span class="mod1"><center>Welcome
<?php
		echo 'Guest';
?></center></span>
<span class="breadcrumbs pathway">
<a href="query.php" class="pathway">Home</a><img src="placement/arrow.png" alt=""> <a href="" class="pathway">Suggestions</a><img src="placement/arrow.png" alt="">View all</span>
														
<table class="contentpaneopen"><tbody><tr>
<td class="contentheading" width="100%">Suggestions</td></tr>
</tbody></table>


<table class="contentpaneopen">
<tbody><tr>
<td colspan="2" valign="top">
<p><strong></strong></p><p>&nbsp;</p><p></p>
<table width="100%" cellspacing="1" cellpading="1" border="1" bgcolor="white"><tbody>
	<tr><th>Team id</th><th> Team Leader</th><th>College Name</th><th>Email</th><th>Contact no.</th></tr>
<?php
	$sql=pg_query("SELECT * FROM registration");
	while($row=pg_fetch_row($sql))
	{
		echo '<tr>';
		for($i=0;$i<=4;$i++)
		echo '<td><center>'.$row[$i].'</td>';
		echo '</tr>';
	}
?>
	
	</tbody></table>
	<p>&nbsp;</p><br>

</td>
</tr>

</tbody></table>
<div id="footer">
<a href="">Copyright ©2008</a> National Institute of Technology,Calicut - 673601 | <a href="">Disclaimer</a>
</div></div></div>
</body></html>
