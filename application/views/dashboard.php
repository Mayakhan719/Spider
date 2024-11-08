<?php $this->load->view('include/head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('include/header'); ?>
		<?php $this->load->view('include/sidebar'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Dashboard
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			<section class="content">

			</section>
		</div>
		<?php $this->load->view('include/footer'); ?>
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->
	<?php $this->load->view('include/scripts'); ?>
</body>

</html>
