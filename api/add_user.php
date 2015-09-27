<?php 

	$email = $_GET["u"];
	$password = sha1(md5($_GET["p"]));
	$name = $_GET['n'];
	if(!empty($email) && !empty($_GET["p"]) && !empty($name)){


	include("./conn.php");

	if (mysqli_query($con, "INSERT INTO users(name,email,password)
							VALUES('$name','$email','$password')")) {
			mysqli_close($con);
			
		die("User added ..");
	}
}else{
	die("u,p,n all params required");
}
 ?>
