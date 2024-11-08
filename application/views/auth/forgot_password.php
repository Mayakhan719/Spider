<?php $this->load->view('include/head'); ?>
</head>

<body class="login-page bg-body-secondary">
	<div class="login-box">
		<div class="login-logo"> <a href="<?=base_url()?>"><b><?=AppName?></b></a> </div>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Enter email will send you otp to reset.</p>
				<form action="../index3.html" method="post">
					<div class="input-group mb-3"> <input type="email" class="form-control" placeholder="Email">
						<div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Send OTP</button> </div>
						</div> <!-- /.col -->
					</div> <!--end::Row-->
				</form>
			</div> <!-- /.login-card-body -->
		</div>
	</div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
	<?php $this->load->view('include/scripts'); ?>
</body><!--end::Body-->
</html>
