<?php 
	session_start();
	if(!isset($_SESSION['email']))
	{
	   header("location:../");
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Chat room</title>
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
		  	
		  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
			<script type="text/javascript" src="../js/chat_controller.js"></script>
			<script type="text/javascript" src="../js/virtualSocket_client_0.1.js"></script>
		
			<style type="text/css">
			.left50{
			 	margin-left: 50px!important;
			}
			.w-500{
				width:500px!important;
			}
			#msg_txt{
				max-height: 50px;
				overflow-y: scroll;
			}
			</style>
 </head>
 <body>
 	<div class="container">

			 <form class="row" id="before_chat">
    	      	<div class="input-field col s10 m6 l4">
	                   <input id="uname"  type="text" class="validate"  />
	                   <label for="uname">Enter Username to chat with</label>
	              </div>
              </form>

          	<form class="row" id="chat_div" >
					
				<div id="modal2" class="modal modal-fixed-footer" style="z-index: 1003; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
				          <div class="modal-content" id="old_msgs" >
								<div class="left">kkd</div>
								
								<div class="right">ldk</div>
				          </div>
		          		
		          		<div class="modal-footer row">
		          				<textarea id="msg_txt" row="2" class="left50 col s9 m9 l9 materialize-textarea"></textarea>
			              		<div class="col s2 m2 l2">
		    		        		<button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat ">Send</a>
			              		</div>
			          	</div>
			        </div>

              </form>
          	
 	</div>
 </body>
 </html>