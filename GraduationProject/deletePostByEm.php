<?php

	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		// Get data
		
		$id=isset($_POST['id']) ? $_POST['id'] : "";
		

		$server_name = "localhost";
		$username = "root";
		$password = "";
		$dbname = "graduation_project";
		$response  = array();
		
		$conn = new mysqli($server_name, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "delete from daysandtimesopening where id = '$id'";
		if ($conn->query($sql) === TRUE) {
			$response['error'] = false;
			$response['message'] = "post deleted!";
		} else {
			$response['error'] = true;
			$response['message'] = "Error, " . $conn->error;
			
		}
		echo json_encode($response);

		$conn->close();
	
	}


?>