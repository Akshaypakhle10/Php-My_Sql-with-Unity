<?php
	$servername = "localhost";
	$username = "root";
	$passsword = "";
	$dbname = "test";

	$gun_name = $_POST["gun_name_post"];//"Pistol"
	$gun_clip_size = $_POST["gun_clip_size_post"];//"7"
	$gun_damage = $_POST["gun_damage_post"];//"15"
	//make connection
	$conn = new mysqli($servername,$username,$passsword,$dbname);
	//Check Connection
	if(!$conn){
		die("Connection Failed.".mysql_connect_error());
	}
	// else echo ("Connection Succeeded");
	$sql = "INSERT INTO guns (Name, Clip_Size, Damage)
VALUES ('".$gun_name."','".$gun_clip_size."','".$gun_damage."')";
	$result  = mysqli_query($conn,$sql);

	if(!result) echo "Error";
	else echo "OKIE DOKIE";

?>