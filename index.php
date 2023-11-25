<html>
	<head>
		<title>Sameer Manek's blog</title>

		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Sameer Manek</h1>
				<a href="#">About</a>
				<a href="#">Blog</a>
				<a href="/arcade/">Arcade</a>
				<a href="mailto:sameermanek@hotmail.com">Email</a>
			</div>
		</header>

		<div class="br"></div>

		<main>
			<div class="container">
				<div class="section">
					<h3># Overview</h3>
					<p>Hello, Thanks for visiting my small place on the Internet. I am a programmer who knows some stuff about building websites, games and softwares in general. I will be using this website to write some blogs, upload some fun experiments / games using HTML and share updates on my life.</p>
				</div>

				<div class="section">
					<h3># Arcade</h3>
					<p>You will find some HTML games to play in this section. Code for these games has been open sourced on <a href="https://github.com/sameer-manek">my GitHub profile</a>.</p>
					<ul class="grid">
						<?php
							$files = scandir("./arcade/");
							foreach ($files as $file) {
								if ($file != "."&& $file != "" && $file != "..") {
									echo "
										<a href='/arcade/$file/'>
											<img src='/arcade/$file/thumbnail.png' alt='' width='192px' />
										</a><br />";
								}
							}
						?>
					</ul>
					
				</div>
			</div>
		</main>

		<div class="br"></div>

		<footer>
			<div class="container"></div>
		</footer>
	</body>
</html>