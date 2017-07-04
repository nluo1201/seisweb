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
			var div = document.getElementById('chatscreen');
			var last = div.lastChild.innerHTML;
			var output = "<div class='mitem'> <div class='userids'>" + result.userid + ": </div>"
			+ "<div class='message'>" + result.message + " </div> </div>";
			if(last != output){
				div.innerHTML = div.innerHTML + output;
				div.scrollTop = div.scrollHeight;
			}
		},
		complete: function(){
			setTimeout(getMessages, 7000);
			
		}
	})
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
			var output = "<div class='mitem'> <div class='userids'>" + packet.userid + ": </div>"
			+ "<div class='message'>" + packet.message + " </div> </div>";
			var div = document.getElementById('chatscreen');
			var last = div.lastChild.innerHTML;
			if(last != output){
				div.innerHTML = div.innerHTML + output;
				div.scrollTop = div.scrollHeight;
			}
		},
		complete: function(){
			console.log("ajax send message finished.");
		}
	})
}

$(document).ready(function(){
		getMessages();
		$('#send-butt').click(function(){
			var message = $('#message-field').val();
			var userid = $('#userid').html();
			sendMessage(userid, message);
			}
		)
})
	
	

