<?php
	
	$login_email=$_GET["email"];
	$login_password=$_REQUEST["password"];
	
		$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect to server");

	$query="SELECT * FROM dashboard where username='$login_email' and password='$login_password'";
	$result=mysqli_query($connection,$query) or die("Query Failed:".mysql_error());
	if(mysqli_num_rows($result)>0){
		header("location:Home_page.html");
	}
	else{
		echo "<script>alert('Invalid Credentials');
		window.location.href='index.html'</script>";
	}
?>