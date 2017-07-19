 <?php include("./html_inc/header.php"); ?>

<h1> About </h1>
<nav class="sub-nav">
	<a href="./content_map.php">Content Map</a>
	<a href="./wireframe.php">Wireframe</a>
</nav>

<section class="section" id="credits">
	<h3> Credits </h3>
	<p> Below are a list and links to all the 3rd party resources I've used for this project</p>
	<ul>
		<li> General tutorials site for knowledge: <a href="https://www.w3schools.com/">w3schools</a>   </li>
		<li> Canvas tutorials: <a href="http://www.html5canvastutorials.com">html5canvastutorials</a>   </li>
		<li> Audio and Video resources: <a href="http://www.music.army.mil/music/nationalanthem/">music.army.mil</a>   </li>
		<li> wireframe and content map tool: <a href="https://www.draw.io/">draw.io</a>   </li>
	</ul>

</section>

<section class="section" id="walkthrough">
	<h3> Walkthrough </h3>
	<p> Below is a description of all requirements and its implementation in this site:</p>
	<ul>
	<li><a href="content_map.php">Content Map</a> : Used draw.io graphic to intergrate into the page.</li>
	<li><a href="wireframe.php">Wireframe </a>:&nbsp;Used draw.io graphic to intergrate into the page.</li>
	<li>Use HTML5 for markup: obvious thing</li>
	<li>Use&nbsp;<a href="css/">CSS</a> for layout: I only used bootstrap normalize and style templates no 3rd party tools.</li>
	<li>The project includes the following <a href="index.php">4 top level sections</a>: Home,&nbsp;About, Snippets &amp; Contact.</li>
	<li>Added a unique <a href="favicon.ico">favicon</a> created using photoshop.</li>
	<li>CSS Glyphs in footer copyrighted section.</li>
	<li>Video element in <a href="snippets.php#video">snippets video </a>section.</li>
	<li>Audio element of usa national athem in <a href="snippets.php#audio">snippets audio </a>section.</li>
	<li>An overview slideshow in <a href="snippets.php#slideshow">snippets slideshow </a>section.</li>
	<li>Use google's Tekon web font on all headers.</li>
	<li>Gradient transition section as <a href="snippets.php#canvas">canvas</a> element. Intended to span across window screen but I failed to calculate the resized amount so I draw a square instead.</li>
	<li>Chat button as HTML5 <a href="index.php#chat-butt">form input validation</a>.</li>
	<li>JSON for data interchange for messages delivery and site visualization updates through AJAX and JQuery. This is the hardest thing in the whole project because it is real time updates right on the screen. Extra credits for this effort?</li>
	<li>Footer navigation is included with nested grid views of all sub links and sections.</li>
	<li><a href="database/">Sqlite database</a> as of server-side persistent storage for the chat and visualization engines.</li>
	<li>Used goolge pie chart as <a href="snippets.php#visualization">data visualization</a> for site's usage.</li>
	<li>Implementation of <a href="snippets.php#shadowdom">Shadow DOM </a> that let a user click a node element and rotate its text content.</li>
	<li>Authentication required to access <a href="snippets.php#visualization">visualization feature</a>. username: admin, pass: letmein.</li>
	<li>The About  page includes a <a href="about.php#credits">Credits</a> section that lists and links to<br />the external resources I've used.</li>
	<li>Project <a href="about.php#walkthrough">Walkthrough</a> is this one.</li>
	<li>PageSpeed Insights: all passed 88/93: <a href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~luon9752%2Fproject%2F"> Click to see scores</a></li>
	</ul>
</section>
















<?php  include ("./html_inc/footer.php"); ?>