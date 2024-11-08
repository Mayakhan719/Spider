<?php $this->load->view('include/head'); ?>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-box-body" style="position: absolute;background-color: white;width: 350px;">
			<div style="padding-bottom: 50px;">
				<center><img src='<?php echo base_url(); ?>assets/images/logo.png'> </center>
			</div>
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="<?=base_url('dashboard')?>" method="post">
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php $this->load->view('include/scripts'); ?>
</body><!--end::Body-->

</html>
