<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sameer Manek's blog</title>

		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Sameer Manek</h1>
				<a href="#">About</a>
				<a href="https://github.com/sameer-manek" target="__blank">Github</a>
				<a href="mailto:iam@sameermanek.in">Email</a>
			</div>
		</header>

		<div class="br"></div>

		<main>
			<div class="container">
				<div class="section">
					<h3># Overview</h3>
					<p>Hello, Thanks for visiting my small place on the Internet. I am a programmer who knows some stuff about building websites, games and softwares in general. I will be using this website to write some blogs, upload some fun experiments / games using HTML and share updates on my life.</p>
					<p><b>NOTE:</b> This website is pretty much in development, expect more things coming up soon.</p>
				</div>

				<div class="section">
					<h3># Arcade</h3>
					<p>You will find some HTML games to play in this section. Code for these games has been open sourced on <a href="https://github.com/sameer-manek">my GitHub profile</a>.</p>
					<div class="grid">
						<?php
							$files = scandir("./arcade/");
							foreach ($files as $file) {
								if ($file != "."&& $file != "" && $file != "..") {
									echo "
										<a class='grid-item' href='/arcade/$file/'>
											<img src='/arcade/$file/thumbnail.png' alt='' width='192px' /><br/>
											<h5>$file</h5>
										</a><br />";
								}
							}
						?>
					</div>
					
				</div>
			</div>
		</main>

		<div class="br"></div>

		<footer>
			<div class="container"></div>
		</footer>
	</body>
</html>
