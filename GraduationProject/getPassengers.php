<?php 


$cat = "";
if(isset($_GET['cat'])){
	$cat = $_GET['cat'];
}


	$server_name = "localhost";
	$username = "root";
	$password = "";
	$dbname = "graduation_project";
	
	$conn = new mysqli ($server_name, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "select * from userdata group by Full_name" ;

	$result = $conn->query($sql);
	$data = "";

	if ($result->num_rows >0) {
		while($row = $result->fetch_assoc()){
			$data.= $row["userId"]. " , " . $row["Name"] ." , " . $row["password"] ." , " . $row["phoneNum"] ." , " . $row["score"] ."/ " ;
		}
		
		echo $data ;
	} else {
		echo "no result";
	}

	$conn->close();


 ?>

