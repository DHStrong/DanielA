<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>CAMP SUMMER</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/business-casual.css" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="brand">CAMP SUMMER</div>
	<div class="address-bar">300 Swim Camp Road | Brooklyn, NY 11201| 123.456.7890</div>

	<!-- Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
				<a class="navbar-brand" href="index.html">Camp Summer</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="contact.html">Evaluation</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<div class="container">

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Contact
						<strong>Camp Summer</strong>
					</h2>
					<hr>
				</div>
				<div class="col-md-8">
					<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
					<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.021057514173!2d-73.9896475848906!3d40.69553387933374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x284552dca0b97d69!2sNew+York+City+College+of+Technology!5e0!3m2!1sen!2sus!4v1502404535361"></iframe>
				</div>
				<div class="col-md-4">
					<p>Phone:
						<strong>718.123.4567</strong>
					</p>
					<p>Email:
						<strong><a href="mailto:name@example.com">NYCamps@jahguide.com</a></strong>
					</p>
					<p>Address:
						<strong>300 Jay Street
                            <br>Brooklyn, NY 11201</strong>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						<strong>Questionnaire</strong>
					</h2>
					<hr>
					<p>Complete the required fields and in the Camp Interests section please fill out what interests you; favorite sport, favorite non sporting activities, your expectations and what you'd like in a camp setting.</p>
					<form role="form" action="form-handler-nodb.php" method="post">
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Full Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Age</label>
									<input type="text" name="age" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Gender (M/F)</label>
									<input type="text" name="gender" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Email Address</label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Phone Number</label>
									<input type="text" name="phone" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Current Education</label>
									<input type="text" name="education" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Home Address</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Dates Available 00/00/00</label>
									<input type="text" name="dates" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label><input type="checkbox" name="interest"
									value="swim"> Swim</label>
								</div>
								<div class="form-group col-lg-4">
									<label><input type="checkbox" name="interest"
									value="hiking">Hiking </label>
								</div>
								<div class="form-group col-lg-4">
									<label><input type="checkbox" name="interest"
						value="Volunteering">Volunteering </label>
								</div>
								<div class="clearfix"></div>
								<div class="form-group col-lg-12">
									<label>Camp Interests </label>
									<textarea class="form-control" name="message" rows="6"></textarea>
								</div>
								<div class="form-group col-lg-12">
									<input type="hidden" name="save" value="contact">
									<input type="submit" class="btn btn-default" value = "Submit">
									<br>
									<button type="reset" class="btn btn-default">Reset</button>

								</div>
							</div>
						</form>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Copyright &copy; Brooklyn Camps 2017</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
