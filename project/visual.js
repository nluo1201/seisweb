
// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function parseVisualization(data){
	if(!chart_data){
		chart_data = new google.visualization.DataTable();
		chart_data.addColumn('string', 'userids');
		chart_data.addColumn('number', 'usage');
		chart_data.addRows([
		  ['SITE-ADMIN', 2],
		]);
	}
	else{
		chart_data = new google.visualization.DataTable();
		chart_data.addColumn('string', 'userids');
		chart_data.addColumn('number', 'usage');
		//chart_data.addRows();
		for (i = 0; i < data.length; i++) { 
			var obj = data[i];
			chart_data.addRow([obj.userid, obj.usage]);
		}
	}
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	chart.draw(chart_data, options);
}

function postSystemStatus(message){
	var div = document.getElementById('chart_div');
	var output = "<div class='errnotice'>" 
	+ message + "</div>";
	div.innerHTML = div.innerHTML + output;
	div.scrollTop = div.scrollHeight;
}

function getVisualization(){
	var packet = new Object();
	packet.method = "visual";
	$.ajax({
		type: "POST",
		dataType: "json",
		url: "./visual_ajax.php",
		data: packet,
		cache: false,
		success: function(result){
			//var data = jQuery.parseJSON(result);
			if(result.status){
				console.log("visualization request sent sucessfully");
				parseVisualization(result.data);
			}
			else{
				console.log("visualization request failed to send!");
				postSystemStatus("Cannot send visualization request!");
			}
		},
		complete: function(){
			//automatically update the piechart every 5 secs
			setTimeout(getVisualization, 5000);
			
		}
	});
}
// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});
// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(getVisualization);
var chart_data;
var options = {'title':'Public Chat Usage Visualization',
				   'width':600,
				   'height':400};
$(document).ready(function(){
	getVisualization();
	$('#chart_div').click(function(){
		getVisualization();
	})
});
	
