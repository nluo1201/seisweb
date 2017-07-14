<?php
	require("files/header.php");
	require("files/nav.php");
?>
	<h2>Album Data From JSON</h2>
    <div id="placeholder"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
  $.getJSON('albums.json', function(data) {
        var output="<ul>";
        for (var i in data.artist) {
            output+="<li>" + data.artist[i].name + " " + data.artist[i].album + "--" + data.artist[i].year+"</li>";
        }

        output+="</ul>";
        document.getElementById("placeholder").innerHTML=output;
  });
    </script>
<?php require("files/footer.php"); ?>

