<?php
 	if(isset($_POST["Forward"]))
	 {
		 $d=$_POST['Forward'];
		 //DB Connection
		 $conn = new mysqli('localhost','root','','directions');
		 if($conn->connect_error)
		 {
			 die('Failed'.$conn->connect->error);
		 }
		 else
		 {
			 $stmt = $conn->prepare("INSERT INTO `direction` (`Dc`) 
			 VALUES (?)");
			 $stmt->bind_param("s", $d);
			 $stmt->execute();
			 echo "</br>";
			 echo "</br>";   
			 echo " F ";
		 }
	 }
	 if(isset($_POST["Left"]))
	 {
		 $d=$_POST['Left'];
		 //DB Connection
		 $conn = new mysqli('localhost','root','','directions');
		 if($conn->connect_error)
		 {
			 die('Failed'.$conn->connect->error);
		 }
		 else
		 {
			 $stmt = $conn->prepare("INSERT INTO `direction` (`Dc`) 
			 VALUES (?)");
			 $stmt->bind_param("s", $d);
			 $stmt->execute();
			 echo "</br>";
			 echo "</br>";   
			 echo " L ";
		 }
	 }

	 if(isset($_POST["Stop"]))
	 {
		 $d=$_POST['Stop'];
		 //DB Connection
		 $conn = new mysqli('localhost','root','','directions');
		 if($conn->connect_error)
		 {
			 die('Failed'.$conn->connect->error);
		 }
		 else
		 {
			 $stmt = $conn->prepare("INSERT INTO `direction` (`Dc`) 
			 VALUES (?)");
			 $stmt->bind_param("s", $d);
			 $stmt->execute();
			 echo "</br>"; 
			 echo "</br>";  
			 echo " S " ;
		 }
	 }
	 if(isset($_POST["Right"]))
	 {
		 $d=$_POST['Right'];
		 //DB Connection
		 $conn = new mysqli('localhost','root','','directions');
		 if($conn->connect_error)
		 {
			 die('Failed'.$conn->connect->error);
		 }
		 else
		 {
			 $stmt = $conn->prepare("INSERT INTO `direction` (`Dc`) 
			 VALUES (?)");
			 $stmt->bind_param("s", $d);
			 $stmt->execute();
			 echo "</br>"; 
			 echo "</br>";  
			 echo " R " ;
		 }
	 }

	 if(isset($_POST["Backward"]))
	 {
		 $d=$_POST['Backward'];
		 //DB Connection
		 $conn = new mysqli('localhost','root','','directions');
		 if($conn->connect_error)
		 {
			 die('Failed'.$conn->connect->error);
		 }
		 else
		 {
			 $stmt = $conn->prepare("INSERT INTO `direction` (`Dc`) 
			 VALUES (?)");
			 $stmt->bind_param("s", $d);
			 $stmt->execute();
			 echo "</br>"; 
			 echo "</br>"; 
			 echo " B " ;
		 }
	 }
	 
?>