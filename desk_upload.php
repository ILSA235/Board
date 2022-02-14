<?php
	$conn = new mysqli("localhost", "drahk132_test1", "7mQvQCTY7X", "drahk132_test1");
	if($conn->connect_error){
		die("Помилка1: " . $conn->connect_error);
	}
		$pattern_phone = '/^[0-9]{10}$/u';
		$pattern_name = '/^[a-zA-Zа-яА-ЯЁё]{1,32}$/u';
		$username=$conn->real_escape_string($_POST["username"]);
		$password=$conn->real_escape_string($_POST["password"]);
		$phonenum=$conn->real_escape_string($_POST["phonenum"]);
		$mail=$conn->real_escape_string($_POST["email"]);
		$facebook=$conn->real_escape_string($_POST["facebook"]);
		$twitter=$conn->real_escape_string($_POST["twitter"]);
		$instagram=$conn->real_escape_string($_POST["instagram"]);
		$subscribe=$conn->real_escape_string($_POST["subscribe"]);
	if(preg_match($pattern_phone, $phonenum) && preg_match($pattern_name, $username)){
		//$sql="CREATE TABLE Desk( ID int not null, username varchar(255) not null,password varchar(255) not null, phonenum int not null, mail varchar(255), facebook varchar(255), instagram varchar(255), twitter varchar(255), subscribe varchar(255) not null) ";
		$sql = "INSERT INTO Desk (username, password, phonenum, mail, facebook, instagram, twitter, subscribe) VALUES('$username', '$password', $phonenum, '$mail', '$facebook', '$instagram', '$twitter', '$subscribe');";
		if($result = $conn->query($sql)){
			
		} else{
			echo "Помилка2: " . $conn->error;
		}
	}	  
	else{
		echo "Помилка3: " . $conn->error;
	}
	
	$conn->close();
?>