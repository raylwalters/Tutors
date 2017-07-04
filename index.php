<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<title>2smart2tors</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	</head>
	<body>
	<div id="wrapper">
	<?php 
		include 'header.php';
	?>
		<div class="row">
			<div class="col-sm-8 left-rail">
				<div class="row">
					<div class="col-sm-12">
						<img src="images/tutors.jpg" class="center-block img-responsive" alt="Tutors">
						<h3>Hands-on & Minds-on Tutoring</h3>
					</div>
				</div>

				<div class="row" id="home-info">
					<div class="col-sm-4">
						<h3>Engaging</h3>
						<p>With hands-on and minds-on, students will be active participants in the learning experience.</p>
					</div>
					<div class="col-sm-4">
						<h3>Relevant</h3>
						<p>Students will learn the content within a real-world situation.</p>
					</div>
					<div class="col-sm-4">
						<h3>Fun</h3>
						<p>Forget the same old boring classroom.  By incorporating games and competition, students will be on the edge of their seats!</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-xs-8 form-layout">
						<form method="post" action="index.php">
							<fieldset>
								<legend>Get your scholar on the path to academic success with 2smart2tors!</legend>
								<p>
								<input class="half-form" type="text" name="first_name" placeholder="First Name">
								<input class="half-form" type="text" name="last_name" placeholder="Last Name">
								</p>
								<p>
								<input class="form-input" type="text" name="email" placeholder="Email">
								</p>
								<p>
								<input class="form-input" type="text" name="phone" placeholder="Phone Number">
								</p>
								<p>
								<input class="form-input" type="text" name="city" placeholder="City">
								</p>
								<select class="form-input" name="desired_course">
									<option value="default">Pick a course</option>
									<option value="basic_math">Basic Math</option>
									<option value="fractions">Fractions</option>
									<option value="linear_equations">Linear Equations</option>
									<option value="algebra">Algebra</option>
									<option value="pre_algebra">Pre-Algebra</option>
									<option value="statistics">Statistics</option>
									<option value="geometry">Geometry</option>
									<option value="reading_comprehension">Reading Comprehension</option>
								</select>
								<button id="form-button" type="submit" value="Send">Get Started Now</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
	</body>
	<?php 
		include 'footer.php';
	?>
</html>