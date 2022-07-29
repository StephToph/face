<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<title><?php echo $title; ?></title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo base_url() ?>assets/logo.jpg" height="54" alt="Hill City" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('users/reg', array('id'=>'bb_ajax_form', 'class'=>'form-horiontal')); ?>
             				<div id="bb_ajax_msg"></div>
							<div class="form-group mb-none">
								<div id="preview"><div id="live_camera" align="center"></div></div>
								<input type="hidden" name="image" class="image-tag">
				                <br>
				                <div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											 <input type=button class="btn btn-primary" value="Take Snapshot" onClick="capture_web_snapshot()">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<button type="button" class="btn btn-primary" onClick="window.location.reload();">Re-Take Snapshot</button>
										</div>
									</div>
								</div><hr>
								<div class="row">
									<div class="col-sm-12 mb-lg">
										<label>Full Name</label>
										<input name="name" id="name" required type="text" class="form-control" />
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Gender</label>
										<select class="form-control" id="gender" name="gender" required>
											<option value="">--Select--</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Email Address</label>
										<input name="email" id="email" type="email" required class="form-control"/>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Phone Number</label>
										<input name="phone" type="text" id="phone" required class="form-control" />
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Matric No</label>
										<input name="matric_no" id="matric_no" type="text" required class="form-control"/>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Department</label>
										<select class="form-control" id="dept" name="dept" required>
											<option value="">--Select--</option>
											<option value="Computer Science">Computer Science</option>
											<option value="Computer Engineering">Computer Engineering</option>
											<option value="Biochemistry">Biochemistry</option>
											<option value="Business Administration">Business Administration</option>
											<option value="Mass Communication">Mass Communication</option>
											<option value="Accounting">Accounting</option>
											<option value="Digital Marketing">Digital Marketing</option>
											<option value="Statistics">Statistics</option>
										</select>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Level</label>
										<select class="form-control" id="level" name="level" required>
											<option value="">--Select--</option>
											<option value="100">100</option>
											<option value="200">200</option>
											<option value="300">300</option>
											<option value="400">400</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-primary btn-block hidden-xs">Sign Up</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<p class="text-center">Already have an account? <a href="<?php echo base_url('login'); ?>">Sign In!</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y') ?>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/wcam.min.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>
		<script src="<?php echo base_url(); ?>assets/jsform.js"></script>
		<script> 
	        Webcam.set({
		        width: 400,
		        height: 300,
		        image_format: 'jpeg',
		        jpeg_quality: 90
		    });
		  
		    Webcam.attach( '#live_camera' );
		  
		    function capture_web_snapshot() {
		        Webcam.snap( function(site_url) {
		            $(".image-tag").val(site_url);
		            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
		            document.getElementById("save-btn").disabled = false;

		        } );
		    }
		</script>
		

	</body>
</html>