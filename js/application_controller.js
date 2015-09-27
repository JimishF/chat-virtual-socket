$(document).ready(function(){
	$("#l_form").on("submit",function () {
			
			$("#error").hide();
			
			$("#actionS").attr("disabled","true");
			$("#actionS").html("Authenticating..");


			var email = $("#email").val();
			var pass = $("#pass").val();
	    	var url = "./api/login_auth.php";
	    		
	    		$.post(url,{email:email,pass:pass}).done(function(d){
	    			if(d.status == "1"){
						
						$("#actionS").html("Redirecting..");
	    				setTimeout(function(){
	    					 window.location = "./room/"
	    				},1000);
	    			}else{
						
						$("#actionS").html('Sign in<i class="mdi-content-send right"></i>');
	    				// $("#actionS").removeAttr("disabled");
	    				$("#error").show();
	    				$("#error").html(d.message); 
	    			}
	    		});

	    		return false;
	});
});
