
function postNewMessage(recvData){
	if(recvData.status){
		if(recvData.messages){
			var div = document.getElementById('chatscreen');
			var messages = recvData.messages;
			var size = Object.keys(messages).length;
			$curPos = $curPos + size;
			for (var i = 0; i < size; i++) {
				var item = messages[i];
				var output = "<div class='mitem'> <div class='userids'>" 
				+ item.userid + ": </div>"
				+ "<div class='message'>" + item.message
				+ " </div> </div>";	
				div.innerHTML = div.innerHTML + output;
				div.scrollTop = div.scrollHeight;
			}	
		}
	}
}

function postSystemStatus(message){
	var div = document.getElementById('chatscreen');
	var output = "<div class='errnotice'>" 
	+ message + "</div>";
	div.innerHTML = div.innerHTML + output;
	div.scrollTop = div.scrollHeight;
}



function getMessages(){
	var request = {
		method: 'pull',
		position: $curPos
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
			if(result.status){
				console.log("message sent sucessfully");
			}
			else{
				console.log("message failed to send!");
				postSystemStatus("Cannot send messages!");
			}
			
			//delete old text.
			$('#message-field').val("");
		},
		complete: function(){
			
			
		}
	});
}

$curPos = 0;

$(document).ready(function(){
		getMessages();
		$('#send-butt').click(function(){
			var message = $('#message-field').val();
			var userid = $('#userid').html();
			sendMessage(userid, message);
			}
		)
});
	
	

