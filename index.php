<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>INTERLINK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">INTERLINK<span>by Hackoholics</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="#">Home</a></li>
					<li><a href="signup.html"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="index.php?logout='1'">Log Out</a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A User Friendly Website</p>
							<h2>INTERLINK</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/xerox.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A Brief Description....</p>
							<h2>XEROX</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/stationary.png"  alt="" />
					<div class="inner">
						<header>
							<p>Make A Deal</p>
							<h2>STATIONARY</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/textbook.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Extract The Knowledge</p>
							<h2>TEXTBOOKS</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/book.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Get My Notebook</p>
							<h2>NOTEBOOKS</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/xerox.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>maecenas sapien feugiat ex purus</p>
										<h2>XEROX</h2>
									</header>
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="xerox.php" class="button alt">Get Here</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/stationary.png" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>mattis elementum sapien pretium tellus</p>
										<h2>Stationary</h2>
									</header>
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="displaystationary.php" class="button alt">Get Here</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box"> 

								<div class="image fit">
									<img src="images/book.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>mattis elementum sapien pretium tellus</p>
										<h2>QUESTION PAPERS</h2>
									</header>
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt">Get Here</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>mattis elementum sapien pretium tellus</p>
										<h2>MATERIALS  NOTES</h2>
									</header>
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
						<h2>Morbi maximus justo</h2>
					</header>
				</div>
			</section>

	
		<footer id="footer">
				<div class="inner">

					<h2>Raise Your Complaints here</h2>

					<form action="complaint.php" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit" name="complaint"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>