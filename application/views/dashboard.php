<section role="main" class="content-body">
	<header class="page-header">
		<h2>Dashboard</h2>
	
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="<?php echo base_url(); ?>">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Dashboard</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->

	<div class="row">
		<div class="col-md-4 col-lg-5">

			<section class="panel">
				<div class="panel-body">
					<div class="thumb-info mb-md">
						<img src="<?php echo base_url($this->Crud->read_field('user_id', $user_id, 'image', 'pics')); ?>" style="height: 400px; width: 400px" class="rounded img-responsive" alt="Student" >
						<div class="thumb-info-title">
							<span class="thumb-info-inner"><?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'name')); ?></span>
							<span class="thumb-info-type">STUDENT</span>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-8 col-lg-7">

			<div class="tabs">
				<div class="tab-content">
					<div id="edit" class="tab-pane active">
							<h4 class="mb-xlg">Personal Information</h4>
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileFirstName">Full Name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileFirstName" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'name')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileLastName">Gender</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileLastName" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'gender')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileAddress">Email Address</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileAddress" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'email')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileCompany">Phone Number</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileCompany" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'phone')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileLastName">Matric No</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileLastName" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'matric_no')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileAddress">Department</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileAddress" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'dept')); ?>" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="profileCompany">Level</label>
									<div class="col-md-8">
										<input type="text" class="form-control" id="profileCompany" value="<?php echo strtoupper($this->Crud->read_field('id', $user_id, 'user', 'level')); ?>" readonly>
									</div>
								</div>
							</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: page -->
</section>