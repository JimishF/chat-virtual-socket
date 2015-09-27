<?php 
$ret = array();
if(isset($_POST['email']) && isset($_POST['pass'])){

	$email = $_POST["email"];
	$password = sha1(md5($_POST["pass"]));
	
	include("./conn.php");
		
		if ($result = mysqli_query($con, "SELECT * FROM users Where email = '$email';")) {
				$data = mysqli_fetch_array($result);
							mysqli_close($con);
				
				if($data['email'] != $email)
				{
					$ret = ["status"=>0,"message"=>"Invalid Username"];
				}
				else if($data['password'] != $password)
				{
					$ret = ["status"=>0,"message"=>"Invalid Password"];
				}
				else{

					session_start();
						 $_SESSION['name'] = $data['name']; 
						 $_SESSION['email'] = $data['email']; 
						 $_SESSION['chk'] = $data['password'];
						 $_SESSION['uid'] = $data['id'];
			$ret = ["status"=>1,"message"=>"Authentication sucess"];

				}
		} 
		else {
			$ret = ["status"=>0];
		}

}else{
	$ret = ["status"=>0,"message"=>"Unauthorized attempt"];
} 
	header('Content-Type: application/json');
	echo json_encode($ret);
 ?>

<?php
?>