<!DOCTYPE html>
<html>
<head>
<title>Web Programming Game Forum - Add Game</title>
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
		<h1>Add Game</h1>
		<form>
		<p class="addgame">Title: <input type="text" name="title" class="item"/></p>
		<p class="addgame">System:
			<select name="systems" class="item">
			  <option value="ps4">PlayStation 4</option>
			  <option value="xboxone">Xbox One</option>
			  <option value="pc">PC</option>
			  <option value="switch">Nintendo Switch</option>
			  <option value="3ds">Nintendo 3DS</option>
			</select></p>
		</form>
		<div id="Enter">Enter</div>
	</div>
	<div id="Footer">
		<p>Designed by Matthew Czech, Zackary Flake, and Matthew Paule</p>
	</div>
</body>
</html>
