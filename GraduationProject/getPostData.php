	<?php

	$id="";
	if(isset($_GET['user_id'])){
		$id = $_GET['user_id'];
	}
	
			$server_name = "localhost";
			$username = "root";
			$password = "";
			$dbname = "graduation_project";
			$data=array();

	$con=mysqli_connect($server_name, $username, $password, $dbname) or die('Unable to connect');

  
   $sql2="DELETE FROM `posts` WHERE `date` < CURDATE()";
        $con->query($sql2);
	$sql="SELECT userdata.name as name,userdata.image as image, posts.date as date, posts.post as post FROM userdata INNER JOIN posts ON userdata.userId=posts.userId";


	$result=mysqli_query($con,$sql);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			$data[]=$row;
			

		}
		
		print(json_encode($data));
		

	}

	mysqli_close($con);

	?>
