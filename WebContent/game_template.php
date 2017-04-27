<!DOCTYPE html>
<html>
<head>
<title>Web Programming Game Forum - Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Author"
	content="Matthew Czech, Zackary Flake, Matthew Paule">
<link rel="stylesheet" href="desktop.css" />
<link rel="icon" href="../images/hqicon.ico" />
</head>
<body>
	<div id="Header">
		<a href="./index.php">
			<img src="../images/GamerHQ_header.png">
		</a>
		<div id="SearchBar">
			<p>SEARCHBAR DIV</p>
		</div>
		<div id="MenuTabs">
			<ul id="HeaderTabs">
				<li><a href="./index.php">News</a></li>
				<li><a href="./ps4.php">PlayStation 4</a></li>
				<li><a href="./xboxone.php">XBox One</a></li>
				<li><a href="./pc.php">PC</a></li>
				<li><a href="./switch.php">Nintendo Switch</a></li>
				<li><a href="./3ds.php">3DS</a></li>
				<li><a href="./forum.php">Forum</a></li>
				<li>
			</ul>
		</div>
	</div>

	<div id="Content">
		<div id="Sidebar">
		<?php 
			$image = "nocover.jpg";
			//$image =
			echo "<img src=\"../images/coverart/" . $image . "\">";
		?>
		<ul id="Info">
			<li><strong>Developed By:</strong><br/> </li>
			<li><strong>Published By:</strong><br/> </li>
			<li><strong>Systems:</strong><br/> </li>
			<li><strong>Released (NA):</strong><br/> </li>
			<li><strong>Rating:</strong><br/> </li>
			</ul>
		</div>
		<?php
			$title = "No Title Given";
			//$title =
			echo "<h1>" . $title . "</h1>";
		?>
			<ul id="GameTabs">
				<li><a href="">Walkthroughs/FAQs</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Discuss</a></li>
			</ul>
		<div id="Gallery">
		</div>
		<div id="Description">
		</div>
	</div>
	<div id="Footer">
		<p>Designed by Matthew Czech, Zackary Flake, and Matthew Paule</p>
	</div>
</body>
</html>
