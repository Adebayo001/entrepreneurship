<?php include("db.php"); ?>
<?php session_start(); ?>
<?php
if(isset($_POST['next'])){
	$state = $_POST['state'];
	$lga = $_POST['slga'];
	$matric = $_SESSION['matric'];
	$query = "UPDATE students SET ";
	$query .= "state = '{$state}', ";
	$query .= "lga = '{$lga}'";
	$query .= "WHERE matric_no = '{$matric}'";

	$add = mysqli_query($connection, $query);

	header("Location: trainer.php");
} 

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ENTREPRENEURSHIP FORM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

			<div id="intro">
						<img width="120px" height="130px" src="images/logo.png"><br>
						<h2>OSUN STATE UNIVERSITY, OSOGBO</h2>
						<p>OFFICE OF THE VICE CHANCELLOR<br/>
						CENTRE FOR ENTREPRENEURSHIP</p>
						<!-- <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p> -->
						<ul class="actions">
							<!-- <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li> -->
						</ul>
					</div>

				<!-- Header -->
					<!-- <header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header> -->

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<!-- <li><a href="index.php">ACADEMIC IDENTIFICATION</a></li> -->
							<li class="active"><a href="state.php">State Placement</a></li>
							<!-- <li><a href="trainer.php">Training</a></li> -->
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul> -->
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 30px;">

						<!-- Featured Post -->
						<form method="POST" action="">
							<div class="fields">
								<div class="field">
									<label for="state">Select State</label>
									<select class="form-control" name="state" id="state" placeholder="Pick State" onchange="show(this)">
									</select>
								</div>
								<div class="field" id="slga1" style="display: none;">
									<label for="slga">Select Local Government</label>
									<select class="form-control" name="slga" id="slga" placeholder="State LGA">
									</select>
								</div>
								<!-- <div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div> -->
							</div>
							<ul class="actions">
								<li><input type="submit" name="next" value="Next"></li>
							</ul>
						</form>

					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; CENTRE FOR ENTREPRENEURSHIP</li>
						<!-- <li>Design: <a href="">ADETECHNOLOGY</a></li> -->
					</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/state.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>