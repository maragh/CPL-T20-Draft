<?php
// require "../config/connect.php";

//get total teams available for display
	function TotalTeam($connection){
		$sql = mysqli_query($connection,"SELECT * FROM Team")
			or die('Team Query Fail'.mysqli_error($connection));
		return $sql;
	}

//get total rounds by different salary category 
	function RoundsBySalary($connection){
		$sql = mysqli_query($connection, "SELECT * FROM Salary")
			or die('Salary Query Fail '.mysqli_error($connection));
		return $sql;
	}
	
//select players and group them by there salary cap	
	function PlayerBySalary($connection, $round){
		$sql = mysqli_query($connection,"SELECT * FROM `Player` WHERE `Salary_Cap` = '$round'")
			or die('Player Query Fail '.mysqli_error($connection));
		return $sql;
	}


?>