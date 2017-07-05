
function postNewMessage(recvData){

	var div = document.getElementById('chatscreen');
	var output = "<div class='mitem'> <div class='userids'>" 
	+ recvData.userid + ": </div>"
	+ "<div class='message'>" + recvData.message
	+ " </div> </div>";	
	div.innerHTML = div.innerHTML + output;
	div.scrollTop = div.scrollHeight;
}


function getMessages(){
	var request = {
		method: 'pull'
	}
	$.ajax({
		type: "POST",
		
		dataType: "json",
		url: "./chat_ajax.php",
		data: request,
		cache: false,
		success: function(result){
			//var data = jQuery.parseJSON(result);
			postNewMessage(result);
		},
		complete: function(){
			setTimeout(getMessages, 5000);
			
		}
	});
}

function sendMessage(userid, message){
	var packet = new Object();
	packet.method = "push";
	packet.userid = userid;
	packet.message = message;
	$.ajax({
		type: "POST",
		
		dataType: "json",
		url: "./chat_ajax.php",
		data: packet,
		cache: false,
		success: function(result){
			//var data = jQuery.parseJSON(result);
			if(result.status == true){
				console.log("message sent sucessfully");
			}
			else{
				console.log("message failed to send!");
			}
			
			//delete old text.
			$('#message-field').val("");
		},
		complete: function(){
			
			
		}
	});
}

$(document).ready(function(){
		getMessages();
		$('#send-butt').click(function(){
			var message = $('#message-field').val();
			var userid = $('#userid').html();
			sendMessage(userid, message);
			}
		)
});
	
	

