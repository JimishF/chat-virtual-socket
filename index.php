<?php 
	session_start();
	if(isset($_SESSION['email']))
	{
	   header("location:./room/");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Virtual Socket</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	  	
	  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
		<script type="text/javascript" src="./js/application_controller.js"></script>
	
	
		<style type="text/css">
		.left50{
		 	margin-left: 50px!important;
		}
		.w-500{
			width:500px!important;
		}
		</style>
	<script type="text/javascript">
		
		VirtualSocket("./api/chat.php")
			.onReceive(function (response) {

			// do whatever you want to do.. with the response object
			// this response object has 4 properties 
	    	/*
	            ** new recieved data
	            response.newObject;
	            
	            ** whole response text
	            response.whole;

	            ** number of iterations of functions
	            response.iterations;

	            ** status (receiving, or finished) 
	            response.status;
		    */

				console.log(response);
			});


	</script>
</head>
<body>

  <div class="container">
 	<div class="row">
			<h4 class="left50">Sign in</h4>
            <form id="l_form">     
            	      <div class="row">
	            	      <div class="input-field col s10 m6 l4">
	                    		<i class="mdi-communication-email prefix"></i>
	                           <input id="email" type="text" class="validate"  />
	                           <label for="email">User Name</label>
	                      </div>
                      </div>

               		<div class="row">
	                    <div class="input-field col col s10 m6 l4">
	                  		  <i class="mdi-communication-vpn-key prefix"></i>
	                           <input id="pass" name="password" type="password" class="validate" /> 
	                           <label for="password">Password</label>
	                   	</div>
                    </div>	  
            	 	<div class="row">
	              	 	<button class="btn waves-effect waves-light left50" type="submit" id="actionS">Sign in
	                      <i class="mdi-content-send right"></i>
	                 	</button>   
            	 </div>
            </form>
            <div class="row"><p id="error" class="red-text"></p></div>
</div>
</body>
</html>