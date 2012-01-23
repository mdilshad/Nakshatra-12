<?php
	//include_once 'class.confirmation.php';
	include_once 'class.registration.php';
	include_once 'class.suggestion.php';
	function genId(){
		$obj=new registration();
		$temp=$obj->getLastId();
		$temp=$temp+1;
		$str='NAK12';
		for($i=$temp;$i<1000;$i=$i*10)
		$str=$str."0";
		$str=$str."$temp";
		return $str;
}
	
	/* register() function inserts a new row into the table 'registration'*/
	function register($teamLeader,$collegeName,$emailId,$phoneNo,$password) {
		$tid=genId();
		$obj = new registration($tid,$teamLeader,$collegeName,$emailId,$phoneNo,$password);
		return $tid;
	}
	/* viewRegistration() function helps you view all the details of the team who registered
		with teamId */
	function viewRegistration($teamId) {
		$obj = new registration($teamId);
		return ($obj -> getResourceArray());
	}
	
	function searchRegistration($searchText) {
		return registration::searchRegisteredTeam($searchText);
	}


	function suggestions($name,$emailId,$msg) {
		
		$obj = new suggestion($name,$emailId,$msg);
	}
	
	
	function viewSuggestion($slNo) {
		$obj = new suggestion($slNo);
		return ($obj -> getResourceArray());
	}
	

	
	/*function confirmTeam($teamId,$part1,$part2,$part3,$part4) {
		$obj = new registration($teamId);
		$objRegn = new confirmation($obj->$teamId,$obj->$teamName,$obj->$collegeName,$obj->$teamLeader,$part1,$part2,$part3,$part4,$obj->$phoneNo);
		echo "Confirmed..!!";
	}*/
?>
