<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/contact.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	

	</head>
	<body>
	<section class="" width="1100px" id="contact">
	<div id="contact" class="contact-area section-padding">
	<div class="container" style="padding:50px">										
		<div class="section-title text-center">
			<h1>Get in Touch</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim. Aenean vitae metus in augue pretium ultrices.</p>
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="contact">
					<form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="name" class="form-control" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="email" class="form-control" placeholder="Email" required="required">
							</div>
							<hr>
							<div class="form-group col-md-12">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
							</div>
							<hr>
							<div class="form-group col-md-12">
								<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div><!--- END COL --> 
			<div class="col-lg-5">
				<div class="single_address">
					<i class="fa fa-map-marker"></i>
					<h4>Our Address</h4>
					<p>3481 Melrose Place, Beverly Hills</p>
				</div>
				<div class="single_address">
					<i class="fa fa-envelope"></i>
					<h4>Send your message</h4>
					<p>Info@example.com</p>
				</div>
				<div class="single_address">
					<i class="fa fa-phone"></i>
					<h4>Call us on</h4>
					<p>(+1) 517 397 7100</p>
				</div>
				<div class="single_address">
					<i class="fa fa-clock-o"></i>
					<h4>Work Time</h4>
					<p>Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
				</div>					
			</div><!--- END COL --> 
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->	
</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

