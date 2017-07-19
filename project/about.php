 <?php include("./html_inc/header.php"); ?>

<h1> About </h1>
<nav class="sub-nav">
	<a href="./content_map.php">Content Map</a>
	<a href="./wireframe.php">Wireframe</a>
</nav>

<section class="section">
	<h3> Credits </h3>
	<p> Below are a list and links to all the 3rd party resources I've used for this project</p>
	<ul>
		<li> General tutorials site for knowledge: <a href="https://www.w3schools.com/">w3schools</a>   </li>
		<li> Canvas tutorials: <a href="http://www.html5canvastutorials.com">html5canvastutorials</a>   </li>
		<li> Audio and Video resources: <a href="http://www.music.army.mil/music/nationalanthem/">music.army.mil</a>   </li>
		<li> wireframe and content map tool: <a href="https://www.draw.io/">draw.io</a>   </li>
	</ul>

</section>

<section class="section">
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
	<li>Video element in <a href="snippets.php">snippets </a>page.</li>
	<li>Audio element of usa national athem in <a href="snippets.php">snippets </a>page.</li>
	<li>An overview slideshow in <a href="snippets.php">snippets </a>page.</li>
	<li>Use google's Tekkon web font on all headers.</li>
	<li><a href="snippets.php">Gradient transition</a> section as canvas element.</li>
	<li>Chat and Visualization button as HTML5 <a href="index.php">form input validation</a>.</li>
	<li>JSON for data interchange for message delivery and site visualization updates.</li>
	<li>Footer navigation is included.</li>
	<li><a href="database/">Sqlite database</a> as of server-side persistent storage for the chat and visualization engines.</li>
	<li>Used goolge pie chart as <a href="snippets.php">data visualization</a> for site's usage.</li>
	<li>Implementation of Shadow DOM that allows a chat user to change his username right on the chat session (not working currently).</li>
	<li>Authentication required to access <a href="snippets.php">visualization feature</a>. username: admin, pass: letmein.</li>
	<li>The <a href="about.php">About</a> page includes a Credits section that lists and links to<br />the external resources I've used.</li>
	<li>Project <a href="about.php">Walkthrough</a> is this one.</li>
	<li>PageSpeed Insights: all passed 88/94: <a href="https://developers.google.com/speed/pagespeed/insights/?url=http%3A%2F%2Flinux2.gps.stthomas.edu%2F~luon9752%2Fpublicchat%2F"> Click to see scores</a></li>
	</ul>
</section>
















<?php  include ("./html_inc/footer.php"); ?>