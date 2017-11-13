<?php
	$servername = "localhost";
	$username = "root";
	$passsword = "";
	$dbname = "test";

	//make connection
	$conn = new mysqli($servername,$username,$passsword,$dbname);
	//Check Connection
	if(!$conn){
		die("Connection Failed.".mysql_connect_error());
	}
	// else echo ("Connection Succeeded");
	$sql = "SELECT Id , Name , Email , Points From user";
	$result  = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		//show data for each row
		while($row = mysqli_fetch_assoc($result)){
			echo "Id:".$row['Id']."|Name:".$row["Name"]."|Email:".$row["Email"]."|Points:".$row["Points"].";";
		}
	}

?>