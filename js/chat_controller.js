var chatData = {};
function display(msgData){
	console.log(msgData);
}
function typing(){

}
function no_type(){

}

$(document).ready(function () {
	$("#chat_div").hide();
		$("#before_chat").on("submit",function(){
			$("#before_chat").animate({width:'toggle'},250);
			chatData.chatWith = $("#uname").val();
			
				setTimeout(function(){
					$("#chat_div").show(200);
						VirtualSocket("../api/chat.php")
							.onReceive(function (response) {

								if(response.typing == "true"){
									typing();
								}else{
									no_type();
									if(response.isMsg){
										display(response.msgData)
									}
								}
								

								// console.log(response);
							});

				},250);
			// alert("kjsk");
			return false;
		});



});