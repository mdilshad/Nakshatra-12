<?php
	include 'interface.php';
	if (isset($_POST['slNo'])) {
		echo viewSuggestion($_POST['slNo']);
	}
	if (isset($_POST['name']) &&
		 isset($_POST['emailId']) &&
		 isset($_POST['msg']) ) {
			echo suggestions($_POST['name'],$_POST['emailId'],$_POST['msg']);
		}

$msg='Submitted successfully';
?>
