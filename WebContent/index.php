<!DOCTYPE html>
<html>
<head>
<title>Web Programming Game Forum - Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Author"
	content="Matthew Czech, Zackary Flake, Matthew Paule">
<link rel="stylesheet" href="desktop.css" />
</head>
<body>
	<div id="Header">
		<h1>HEADER DIV</h1>
			<div id="SearchBar">
				<p>SEARCHBAR DIV</p>
			</div>
		<div id="MenuTabs">
			<ul id="HeaderTabs">
				<li><a href="">PlayStation 4</a></li>
				<li><a href="">XBox One</a></li>
				<li><a href="">PC</a></li>
				<li><a href="">Nintendo Switch</a></li>
				<li><a href="">3DS</a></li>
				<li><a href="">Forum</a></li>
				<li>
			</ul>
		</div>
	</div>
	<div id="Content">
		<div id="TwitterFeed">
			<div class="twitter"><a class="twitter-timeline" data-width="270" data-height="300" href="https://twitter.com/PlayStation">Tweets by PlayStation</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
			<div class="twitter"><a class="twitter-timeline" data-width="270" data-height="300" href="https://twitter.com/Xbox">Tweets by Xbox</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
			<div class="twitter"><a class="twitter-timeline" data-width="270" data-height="300" href="https://twitter.com/NintendoAmerica">Tweets by Nintendo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
			<a class="twitter-timeline" data-width="270" data-height="300" href="https://twitter.com/pcgamer">Tweets by PCGamer</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<h1>The Latest News</h1>
		<div class="news0">
			<h2>Destructoid</h2>
			<?php	
				$html = file_get_contents('https://www.destructoid.com');
				$dom = new DOMDocument();
				@$dom->loadHTML($html);
				$elements = $dom->getElementsByTagName('h2');
				$done = 0;
				foreach($elements as $element){
					if(($element->getAttribute('class') == 'sparticle_title') && $done == 0){
						echo "<p>" . $element->nodeValue . "</p>";
						$done = 1;
					}
				}
			?>
		</div>
		<div class="news1">
			<h2>Gamespot</h2>
				<?php	
					$html = file_get_contents('https://www.gamespot.com');
					$dom = new DOMDocument();
					@$dom->loadHTML($html);
					$elements = $dom->getElementsByTagName('h3');
					$done = 0;
					foreach($elements as $element){
						if(($element->getAttribute('class') == 'media-title') && $done == 0){
							echo "<p>" . $element->nodeValue . "</p>";
							$done = 1;
						}
					}
				?>
		</div>
		<div class="news1">
			<h2>PC Gamer</h2>
					<?php	
						$html = file_get_contents('https://www.pcgamer.com');
						$dom = new DOMDocument();
						@$dom->loadHTML($html);
						$elements = $dom->getElementsByTagName('h3');
						$done = 0;
						foreach($elements as $element){
							if(($element->getAttribute('class') == 'article-name') && $done == 0){
								echo "<p>" . $element->nodeValue . "</p>";
								$done = 1;
							}
						}
					?>
			</div>
		<div class="news1">
			<h2>Gamezone</h2>
						<?php	
							$html = file_get_contents('http://www.gamezone.com');
							$dom = new DOMDocument();
							@$dom->loadHTML($html);
							$elements = $dom->getElementsByTagName('div');
							$done = 0;
							foreach($elements as $element){
								if(($element->getAttribute('class') == 'article-content') && $done == 0){
									$headlines = $element->getElementsByTagName('a');
									foreach($headlines as $headline){
									echo "<p>" . $headline->nodeValue . "</p>";
									$done = 1;
									}
								}
							}
						?>
			</div>
		</div>
	<div id="Footer">
       <p> <br/> <br/> Designed by Matthew Czech, Zackary Flake, and Matthew Paule </p>
    </div>
</body>
</html>
