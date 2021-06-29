<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "robot";
  
  $conn = mysqli_connect($host,$user,$password,$db);
  
  if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); }
  echo "Connected successfully <br>";
  
  
        $v1 =$_POST['v1'];
		$v2 =$_POST['v2'];
		$v3 =$_POST['v3'];
		$v4 =$_POST['v4'];
		$v5 =$_POST['v5'];
		$v6 =$_POST['v6'];
  
  
  if(isset($_POST['save'])){
	  
		$query= "INSERT INTO motors (motor1,motor2,motor3,motor4,motor5,motor6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
	
	
	if(isset($_POST['on'])) {
  
		$my_query = "";
		$my_query = "select * from motors WHERE 1 ";
		$result = mysqli_query($conn, $my_query);
		
	
		if($result){
		   echo "DONE";}
		else{echo "ERROR"; }
  }
  
?>


 