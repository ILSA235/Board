<?php
	session_start();
	$conn = new mysqli("localhost", "drahk132_test1", "7mQvQCTY7X", "drahk132_test1");
	if($conn->connect_error){
		die("Помилка1: " . $conn->connect_error);
	}
	
		$pattern_name = '/^[a-zA-Zа-яА-ЯЁё]{1,32}$/u';
		$username=$conn->real_escape_string($_POST["username"]);
		$password=$conn->real_escape_string($_POST["password"]);
		$sql = "SELECT username,password FROM Desk";
		if($result = $conn->query($sql)){
			foreach($result as $row){
				if($username == $row["username"] && $password == $row["password"]){
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;
					$_COOKIE["username"] = $username;
					$_COOKIE["password"] = $password;
					echo "match";
				}
			}
		} else{
			echo "Помилка2: " . $conn->error;
		} 
	
	$conn->close();
?>