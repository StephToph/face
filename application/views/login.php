<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<title><?php echo app_name; ?></title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
		

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

		

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
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('users/save', array('id'=>'bb_ajax_form', 'class'=>'form-horiontal')); ?>
             				<div id="bb_ajax_msg"></div>
							<div class="form-group mb-lg">
								<div id="preview"><div id="live_camera" align="center"></div></div>
								<input type="hidden" name="image" class="image-tag">
				                <br>
				                <div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											 <input type=button class="btn btn-primary" id="snapp" value="Take Snapshot" onClick="capture_web_snapshot()">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<button type="button" class="btn btn-primary" onClick="window.location.reload();">Re-Take Snapshot</button>
										</div>
									</div>
								</div>
								
				            </div>
							<input type=submit id="save-btn" class="btn btn-primary btn-block" value="LOGIN" disabled>
					</div>

				<div><br>
							<p class="text-center">Don't have an account yet? <a href="<?php echo base_url('register'); ?>">Sign Up!</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y') ?>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
	
		
	
		<script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>
		<script src="<?php echo base_url(); ?>assets/wcam.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/jsform.js"></script>
		<script> 
	        Webcam.set({
		        width: 400,
		        height: 350,
		        image_format: 'jpeg',
		        jpeg_quality: 90
		    });
		  
		    Webcam.attach( '#live_camera' );
		  
		    function capture_web_snapshot() {
		        Webcam.snap( function(site_url) {
		            $(".image-tag").val(site_url);
		            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
		            document.getElementById("save-btn").disabled = false;
		            document.getElementById("snapp").disabled = true;

		        } );
		    }
		</script>
 
	</body>
</html>


