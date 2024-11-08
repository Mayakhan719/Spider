<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?= (current_url() == base_url('monitering') || current_url() == base_url('tracking')) ? 'active' : '' ?> treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?= (current_url() == base_url('monitering')) ? 'active' : '' ?>"><a href="<?= base_url('monitering') ?>"><i class="fa fa-circle-o"></i> Fleet Monitor (Customer) </a></li>
					<li class="<?= (current_url() == base_url('tracking')) ? 'active' : '' ?>"><a href="<?= base_url('tracking') ?>"><i class="fa fa-circle-o"></i> Tracking</a></li>
				</ul>
			</li>
			<li class="<?= (current_url() == base_url('auth/change_password')) ? 'active' : '' ?> treeview">
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>My Account</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?= (current_url() == base_url('auth/change_password')) ? 'active' : '' ?>"><a href="<?=base_url('auth/change_password')?>"><i class="fa fa-circle-o"></i> Change Password </a></li>
					<li><a href="<?=base_url()?>"><i class="fa fa-circle-o"></i> Sign out </a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
