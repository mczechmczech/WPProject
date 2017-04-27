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
			<div class="twitter">
				<a class="twitter-timeline" data-width="270" data-height="300"
					href="https://twitter.com/PlayStation">Tweets by PlayStation</a>
				<script async src="https://platform.twitter.com/widgets.js"
					charset="utf-8"></script>
			</div>
			<div class="twitter">
				<a class="twitter-timeline" data-width="270" data-height="300"
					href="https://twitter.com/Xbox">Tweets by Xbox</a>
				<script async src="https://platform.twitter.com/widgets.js"
					charset="utf-8"></script>
			</div>
			<div class="twitter">
				<a class="twitter-timeline" data-width="270" data-height="300"
					href="https://twitter.com/NintendoAmerica">Tweets by Nintendo</a>
				<script async src="https://platform.twitter.com/widgets.js"
					charset="utf-8"></script>
			</div>
			<a class="twitter-timeline" data-width="270" data-height="300"
				href="https://twitter.com/steam_games">Tweets by Steam</a>
			<script async src="https://platform.twitter.com/widgets.js"
				charset="utf-8"></script>
		</div>
		<h1>The Latest News</h1>
		<div class="news0">
			<h2>Destructoid</h2>
			<?php
			$url = 'https://www.destructoid.com/';
			$html = file_get_contents ( $url );
			$dom = new DOMDocument ();
			@$dom->loadHTML ( $html );
			$elements = $dom->getElementsByTagName ( 'h2' );
			$done = 0;
			foreach ( $elements as $element ) {
				if (($element->getAttribute ( 'class' ) == 'sparticle_title') && $done == 0) {
					echo "<p>" . $element->nodeValue . "</p>";
					$done = 1;
					
					$links = $element->getElementsByTagName ( 'a' );
						$articleLink = $links[0]->getAttribute ( 'href' );
						$fullLink = $url . $articleLink;
						$html = file_get_contents ( $fullLink );
						$articleDOM = new DOMDocument ();
						@$articleDOM->loadHTML ( $html );
						$author = $articleDOM->getElementById ( 'byline_author' );
						echo "<em> By " . $author->nodeValue . "</em> <br/>";
						
						$article = $articleDOM->getElementById ( 'postcontent_post' );
						$texts = $article->getElementsByTagName ( 'p' );
						echo "<p>" . $texts [0]->nodeValue . "</p>";
						echo "<p>" . $texts [1]->nodeValue . "</p>";
						
						echo "<a href=" . $fullLink . "> Read More...</a>";
				}
			}
			?>
		</div>
		<div class="news1">
			<h2>Gamespot</h2>
				<?php
				$url = 'https://www.gamespot.com';
				$html = file_get_contents ( $url );
				$dom = new DOMDocument ();
				@$dom->loadHTML ( $html );
				$elements = $dom->getElementsByTagName ( 'article' );
				$done = 0;
				foreach ( $elements as $element ) {
					if (($element->getAttribute ( 'class' ) == 'media media-article') && $done == 0) {
						$headlines = $element->getElementsByTagName('h3');
						echo "<p>" . $headlines[0]->nodeValue . "</p>";
						$done = 1;
						
							$links = $element->getElementsByTagName ( 'a' );
							$articleLink = $links[0]->getAttribute ( 'href' );
							$fullLink = $url . $articleLink;
							$html = file_get_contents ( $fullLink );
							$articleDOM = new DOMDocument ();
							@$articleDOM->loadHTML ( $html );
							
							$byline = $articleDOM->getElementsByTagName ( 'h3' );
							foreach ( $byline as $line ) {
								if ($line->getAttribute ( 'class' ) == 'news-byline pull-left text-base no-rhythm') {
									$author = $line->getElementsByTagName ( 'a' );
									echo "<em> By " . $author [0]->nodeValue . "</em> <br/>";
								}
							}
							$articles = $articleDOM->getElementsByTagName( 'div' );
							
							$found = 0;
							foreach($articles as $article){
								if(($article->getAttribute('class') == 'js-content-entity-body') && $found == 0){
									$found = 1;
									
									$texts = $article->getElementsByTagName ( 'p' );
									echo "<p>" . $texts [0]->nodeValue . "</p>";
									
									echo "<a href=" . $fullLink . "> Read More...</a>";
								}
							}
					}
				}
				?>
		</div>
		<div class="news1">
			<h2>PC Gamer</h2>
					<?php
					$url = 'https://www.pcgamer.com/news';
					$html = file_get_contents ($url);
					$dom = new DOMDocument ();
					@$dom->loadHTML ( $html );
					$elements = $dom->getElementsByTagName ( 'div' );
					$done = 0;
					foreach ( $elements as $element ) {
						if (($element->getAttribute ( 'class' ) == 'listingResult small result2 ') && $done == 0) {
							$headlines = $element->getElementsByTagName('h3');
							echo "<p>" . $headlines[0]->nodeValue . "</p>";
							$done = 1;
							
							$links = $element->getElementsByTagName ( 'a' );
								$articleLink = $links[0]->getAttribute ( 'href' );
								$html = file_get_contents ( $articleLink );
								$articleDOM = new DOMDocument ();
								@$articleDOM->loadHTML ( $html );
								
								$byline = $articleDOM->getElementsByTagName ( 'span' );
								foreach ( $byline as $line ) {
									if ($line->getAttribute ( 'class' ) == 'no-wrap by-author') {
										echo "<em> By " . $line->nodeValue . "</em> <br/>";
									}
								}
								
								$article = $articleDOM->getElementById( 'article-body' );
								$texts = $article->getElementsByTagName ( 'p' );
								echo "<p>" . $texts [0]->nodeValue . "</p>";
								echo "<a href=" . $articleLink . "> Read More...</a>";
					}
					}
					?>
			</div>
		<div class="news1">
			<h2>Gamezone</h2>
						<?php
						$url = 'http://www.gamezone.com';
						$html = file_get_contents ( $url );
						$dom = new DOMDocument ();
						@$dom->loadHTML ( $html );
						
						$elements = $dom->getElementsByTagName ( 'div' );
						$done = 0;
						foreach ( $elements as $element ) {
							if (($element->getAttribute ( 'class' ) == 'article-content') && $done == 0) {
								$headlines = $element->getElementsByTagName ( 'a' );
								echo "<p>" . $headlines [0]->nodeValue . "</p>";
								$done = 1;
								
								$link = $headlines[0]->getAttribute('href');
								$fullLink = $url . $link;
								$html = file_get_contents($fullLink);
								$articleDOM = new DOMDocument();
								@$articleDOM->loadHTML($html);
								
								$byline = $articleDOM->getElementsByTagName('div');
								foreach($byline as $line){
									if($line->getAttribute('class') == 'byline'){
										echo "<em>" . $line->nodeValue . "</em>";
									}
									if($line->getAttribute('class') == 'body-content'){
										$texts = $line->getElementsByTagName('p');
										echo "<p>" . $texts[0]->nodeValue . "</p>";
										echo "<a href=" . $fullLink . "> Read More...</a>";
									}
								}	
							}
						}
						?>
			</div>
	</div>
	<div id="Footer">
		<p>
			Designed by Matthew Czech, Zackary Flake, and Matthew
			Paule
		</p>
	</div>
</body>
</html>
