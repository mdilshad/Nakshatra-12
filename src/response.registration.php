<?php
	include 'interface.php';
	if (isset($_POST['teamId'])) {
		echo viewRegistration($_POST['teamId']);
	}
	
	if (isset($_POST['search'])) {
		echo searchRegistration($_POST['search']);
	}
	if (isset($_POST['teamLeader']) &&
		 isset($_POST['collegeName']) &&
		 isset($_POST['emailId']) &&
		 isset($_POST['phoneNo']) &&
		 isset($_POST['passwd']) &&
		 isset($_POST['cpasswd']) ) {
			$tid= register($_POST['teamLeader'],$_POST['collegeName'],$_POST['emailId'],$_POST['phoneNo'],$_POST['passwd']);
		}
	$msg=$tid;
?>
