<?php
	$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect to server");
		$level1score=$_COOKIE["level1score"];
		$username=$_COOKIE["username"];
		$query = "UPDATE dashboard SET level1=$level1score where username='$username'";
		$result = mysqli_query($connection,$query) or die("query failed : ".mysql_error());
		echo $level1score;	
	header("Location:Student_Dashboard.php");
?>