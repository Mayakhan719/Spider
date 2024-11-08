<?php $this->load->view('include/head'); ?>
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-box-body">
			<div style="padding-bottom: 50px;">
				<center><img src='<?= base_url('assets/images/logo.png') ?>'> </center>
			</div>
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url('auth') ?>" method="post">
				<div class="form-group has-feedback">
					<select id="customer_name" name="customer_name" class="form-control" required="required">
						<option>Select Customer</option>
						<option>Customer 1</option>
						<option>Customer 2</option>
					</select>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Display Name">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="User Name">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Retype password">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
	</div>
	<?php $this->load->view('include/scripts'); ?>

</body><!--end::Body-->

</html>
