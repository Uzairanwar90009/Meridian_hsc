<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
<?php require_once(__DIR__.'./common/include_header.php') ?>
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<?php require_once(__DIR__.'./common/header.php') ?>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<?php require_once(__DIR__.'./common/menu.php') ?>
		<!-- //navigation -->
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- contact -->
	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">contact
				<span class="font-weight-bold">us</span>
			</h3>
			<div class="row contact-grids agile-1 py-sm-5 pb-sm-0 pb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>1PO Box 8568954 California,
							<label>USA.</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p>+(0121) 121 121
							<label>+(0121) 121 122</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">info@example1.com</a>
							<label>
								<a href="mailto:info@example.com">info@example2.com</a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="#" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" name="First Name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" name="Last Name" placeholder="" required="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Subject</label>
							<input type="text" class="form-control" name="Subject" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="Email" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- brands -->
	<div class="brands-w3ls py-md-5 py-4">
		<div class="container py-xl-3">
			<ul class="list-unstyled">
				<li>
					<i class="fab fa-supple"></i>
				</li>
				<li>
					<i class="fab fa-angrycreative"></i>
				</li>
				<li>
					<i class="fab fa-aviato"></i>
				</li>
				<li>
					<i class="fab fa-aws"></i>
				</li>
				<li>
					<i class="fab fa-cpanel"></i>
				</li>
				<li>
					<i class="fab fa-hooli"></i>
				</li>
				<li>
					<i class="fab fa-node"></i>
				</li>
			</ul>
		</div>
	</div>
	<!-- //brands -->

	<!-- footer -->
	<?php require_once(__DIR__.'./common/footer.php') ?>
	<!-- //footer -->


	<?php require_once(__DIR__.'./common/include_footer.php') ?>

	<!-- //Js files -->


</body>

</html>