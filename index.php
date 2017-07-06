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
		<div class="row outer">
			<div class="col-sm-8 left-rail">
				<div class="row">
					<div class="col-sm-12">
						<img src="images/tutors.jpg" class="center-block img-responsive" alt="Tutors">
						<h3 class="red">Hands-on & Minds-on Tutoring</h3>
					</div>
				</div>

				<div class="row" id="home-info">
					<div class="col-sm-4">
						<h3 class="red">Engaging</h3>
						<p>With hands-on and minds-on, students will be active participants in the learning experience.</p>
					</div>
					<div class="col-sm-4">
						<h3 class="red">Relevant</h3>
						<p>Students will learn the content within a real-world situation.</p>
					</div>
					<div class="col-sm-4">
						<h3 class="red">Fun</h3>
						<p>Forget the same old boring classroom.  By incorporating games and competition, students will be on the edge of their seats!</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-xs-8 form-layout">
						<form method="post" action="email.php">
							<fieldset>
								<legend>Get your scholar on the path to academic success with 2smart2tors!</legend>
								<p>
								<input class="half-form" type="text" name="first_name" required placeholder="First Name">
								<input class="half-form" type="text" name="last_name" required placeholder="Last Name">
								</p>
								<p>
								<input class="form-input" type="text" name="email" required placeholder="Email">
								</p>
								<p>
								<input class="form-input" type="text" name="phone" required placeholder="Phone Number">
								</p>
								<p>
								<input class="form-input" type="text" name="city" required placeholder="City">
								</p>
								<select class="form-input" name="desired_course" required>
									<option value="default">Pick a course</option>
									<option value="Basic Math">Basic Math</option>
									<option value="Fractions">Fractions</option>
									<option value="Linear Equations">Linear Equations</option>
									<option value="Algebra">Algebra</option>
									<option value="Pre-Algebra">Pre-Algebra</option>
									<option value="Statistics">Statistics</option>
									<option value="Geometry">Geometry</option>
									<option value="Reading Comprehension">Reading Comprehension</option>
								</select>
								<button id="form-button" type="submit" name="submit" value="Send">Get Started Now</button>
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