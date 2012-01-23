<?php

	include_once 'database.php';
	class registration {
		private $teamId,$teamLeader,$collegeName,$emailId,$phoneNo,$password,$resourcevar;
		
		public function __construct() {
			$a = func_get_args();
			$i = func_num_args(); 
			if($i==1)
				call_user_func_array(array($this,'viewRegistration'),$a);
			if($i==6)
				call_user_func_array(array($this,'registerTeam'),$a);
		}
		public function __destruct() {}
		
		/* fuction to insert registration details into the table.*/
		function registerTeam($cTeamId,$cTeamLeader,$cCollegeName,$cEmailId,$cPhoneNo,$cPassword) {
			$this->teamId = pg_escape_string($cTeamId);
			$this->teamLeader = pg_escape_string($cTeamLeader);
			$this->collegeName = pg_escape_string($cCollegeName);
			$this->emailId = pg_escape_string($cEmailId);
			$this->phoneNo = pg_escape_string($cPhoneNo);
			$this->password = pg_escape_string($cPassword);
			$query = "insert into registration values (
						'".$this->teamId."',
						'".$this->teamLeader."',
						'".$this->collegeName."',
						'".$this->emailId."',
						'".$this->phoneNo."',
						'".$this->password."')";
			dbquery($query);
		}

		/* This fuction returns all the rows by taking the team ID*/
		function viewRegistration($key) {
			$qry = "select * from registration where teamid = '".$key."'";
			$res = dbquery($qry);
			$this->resourcevar = (resource2array($res));
			$res = dbquery($qry);
			$rec = pg_fetch_row($res);
			$this->teamId = $rec[0];
			$this->teamLeader = $rec[1];
			$this->collegeName = $rec[2];
			$this->emailId = $rec[3];
			$this->phoneNo = $rec[4];
			$this->password = $rec[5];
		}
		
		public function getResourceArray() {
			return $this->resourcevar;
		}
		
		public function getLastId(){
		$sql="SELECT COUNT (*) FROM registration";
		$x=pg_fetch_row(dbquery($sql));
		return $x[0];
	}
		/* function to retuen the resourcevar after searching in the table for contents that matches.*/
		public static function searchRegisteredTeam($arg) {
			$arg='%'.$arg.'%';
			$qry = "select * from registration where 
						(teamid like '".$arg."') OR
						(teamLeader like '".$arg."') OR 
						(collegeName like '".$arg."')";
						
			return (resource2array(dbquery($qry)));
		}
	}
	


?>
