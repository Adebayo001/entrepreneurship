<?php include("db.php"); ?>
<?php session_start();?>
<?php
if(isset($_POST['next_page'])){
	$matric = $_POST['matric'];
	$fullname = $_POST['fullname'];
	$campus = $_POST['campus'];
	$college = $_POST['college'];
	$faculty = $_POST['faculty'];
	$department = $_POST['department'];
	$ststat = $_POST['ststat'];
	$level = $_POST['level'];
	$semester = $_POST['semester'];
	
	$_SESSION['matric'] = $matric;
	
	$query = "SELECT matric_no FROM students WHERE matric_no = '{$matric}'";
    $student_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($student_query);
    
     if($count != 0){
         echo "<script>alert('Matriculation Number already exist');
         window.location.href='index.php';</script>";
  } else {
	$addquery = "INSERT INTO students(matric_no, full_name, campus, college, faculty, department, std_status, std_level, semester) ";
	$addquery .= "VALUES('{$matric}', '{$fullname}', '{$campus}', '{$college}', '{$faculty}', '{$department}', '{$ststat}', '{$level}', '{$semester}')";
	$insert_query = mysqli_query($connection, $addquery);
	header("Location: state.php");
  }
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

				<!-- Intro -->
					<div id="intro">
						<img width="120px" height="130px" src="images/logo.png"><br>
						<h2>OSUN STATE UNIVERSITY, OSOGBO</h2>
						<p>OFFICE OF THE VICE CHANCELLOR</p>
						<p>CENTRE FOR ENTREPRENEURSHIP</p>
						<!-- <p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p> -->
						<ul class="actions">
							<!-- <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li> -->
						</ul>
					</div>

				<!-- Header -->
				<header id="header">
						<a href="" class="logo">ENTREPRENEURSHIP FORM</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="">ACADEMIC IDENTIFICATION</a></li>
							<!-- <li><a href="state.php">State Placement</a></li>
							<li><a href="trainer.php">Training</a></li> -->
						</ul>
						<!-- <ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul> -->
						<!-- <ul class="icons">
							<li>
								<input type="submit" onClick ="javascript:window.close()" value="Exit" >
							</li>
						</ul> -->
					</nav>

				<!-- Main -->
					<div id="main" style="padding-bottom: 30px;">

						<!-- Featured Post -->
						<form method="post" action="">
							<div class="fields">
							<div class="field">
									<label for="matric">Matriculation Number</label>
									<input type="text" autocomplete="off" name="matric" placeholder="Input Your Matriculation Number" required>
								</div>
                                <div class="field">
									<label for="name">Full Name</label>
									<input type="text" autocomplete="off" name="fullname" placeholder="Input Your Full Name" required>
								</div>
								<div class="field">
									<label for="state">Select Campus</label>
									<select class="form-control" name="campus" placeholder="Select Campus" required>
                                        <option value="">--Select Campus--</option>
                                        <option>Osogbo</option>
                                        <option>Okuku</option>
                                        <option>Ikire</option>
                                        <option>Ejigbo</option>
                                        <option>Ipetu Ijesa</option>
                                        <option>Ifetedo</option>
									</select>
								</div>
								<div class="field">
									<label for="state">Select College</label>
									<select class="form-control" name="college" placeholder="Select College" required>
                                        <option value="">--Select College--</option>
                                        <option>Science, Engineering & Technology</option>
                                        <option>Health Science</option>
                                        <option>Management & Social Science</option>
                                        <option>Education</option>
                                        <option>Humanities & Culture</option>
                                        <option>Law</option>
										<option>Agriculture</option>
									</select>
								</div>
                                <div class="field">
									<label for="faculty">Faculty</label>
									<input type="text" autocomplete="off" name="faculty" placeholder="Input Your Faculty" required>
								</div>
                                <div class="field">
									<label for="department">Department</label>
									<input type="text" autocomplete="off" name="department" placeholder="Input Your Department" required>
								</div>
								<!-- <div class="field">
									<label for="study">Programme of Study</label>
									<input type="text" autocomplete="off" name="study" placeholder="Input Your Programme" required>
								</div> -->
								<!-- <div class="field">
									<label for="level">Level</label>
									<input type="text" autocomplete="off" name="level" placeholder="Input Your Level" required>
								</div> -->
								<div class="field">
									<label for="state">Fresher or Returning</label>
									<select class="form-control" name="ststat" id="ststat" onchange="show(this)" required>
									</select>
								</div>
								<div class="field" id="slevel1" style="display: none;">
									<label for="slga">Level</label>
									<select class="form-control" name="level" id="slevel" required>
									</select>
								</div>
								<div class="field">
									<label for="session">Session</label>
									<input type="text" autocomplete="off" name="session" value="2022/2023" readonly>
								</div>
								<div class="field">
									<label for="semester">Select Semester</label>
									<select class="form-control" name="semester" placeholder="Select Semester" required>
                                        <option value="">--Select Semester--</option>
                                        <option>Harmattan</option>
                                        <option>Rain</option>
									</select>
								</div>
                                
								<!-- <div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div> -->
							</div>
							<ul class="actions">
								<li><input type="submit" name="next_page" value="Next"></li>
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
			<script>
				var studentstat = [
      {"ID": "0", "Name": "----Choose----"},
      {"ID": "Fresher", "Name": "Fresher"},
      {"ID": "Returning", "Name": "Returning"},
      ];
      
      var ab = document.getElementById('ststat');
      for (var i = 0; i < studentstat.length; i++) {
      
      ab.innerHTML = ab.innerHTML +
          '<option value="' + studentstat[i]['ID'] + '">' + studentstat[i]['Name'] + '</option>';
      }
      
      
      function show(ab) {
      
      $("#slevel").empty();
      $('#write').val('');
      
      var sect = 
        {
          "Fresher": [
            "100 Level",
            "200 Level"
          ],
          "Returning": [
            "200 Level",
            "300 Level",
            "400 Level",
            "500 Level"
          ]
        };
      
      var message = ab.value;
      
      var ab1 = document.getElementById('slevel');
      
      for (i = 0; i < sect[message].length; i++) {
      
        $('#slevel1').show();
        $('#write1').show();
      
      ab1.innerHTML = ab1.innerHTML +
          '<option value="' + sect[message][i] + '">' + sect[message][i] + '</option>';
      }
      
      
          }
			</script>

	</body>
</html>