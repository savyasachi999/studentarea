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
<html>
<head>
<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body>
<footer id="footer">
				<div class="inner">

					<h2>send your response to user</h2>

					<form action="mailsending.php" method="post">

						<div class="field half first">
							<label for="name">To(mail id)</label>
							<input name="to" id="name" type="email" placeholder="mail">
						</div>
						<div class="field half">
							<label for="email">Subject</label>
							<input name="subject" id="email" type="text" placeholder="subject">
						</div>
						<div class="field">
							<label for="message">Body</label>
							<textarea name="body" id="message" rows="6" placeholder="Body"></textarea>
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
            </body>
            </html>