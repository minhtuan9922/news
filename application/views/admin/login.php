<!DOCTYPE HTML>
<html>
<head>
	<title><?=$title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
	<script type="application/x-javascript">
		addEventListener( "load", function () {
			setTimeout( hideURLbar, 0 );
		}, false );

		function hideURLbar() {
			window.scrollTo( 0, 1 );
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url('asset/') ?>css/bootstrap.css" rel='stylesheet' type='text/css'/>

	<!-- Custom CSS -->
	<link href="<?=base_url('asset/') ?>css/style.css" rel='stylesheet' type='text/css'/>

	<!-- font-awesome icons CSS-->
	<link href="<?=base_url('asset/') ?>css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href='<?=base_url('asset/') ?>css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	<!-- side nav css file -->

	<!-- js-->
	<script src="<?=base_url('asset/') ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url('asset/') ?>js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="<?=base_url('asset/') ?>js/metisMenu.min.js"></script>
	<script src="<?=base_url('asset/') ?>js/custom.js"></script>
	<link href="<?=base_url('asset/') ?>css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

</head>

<body class="cbp-spmenu-push">

	<!-- main content start-->
	<div id="page-wrapper" style="margin-left: 0">
		<div class="main-page login-page ">
			<h2 class="title1">Login</h2>
			<div class="widget-shadow">
				<div class="login-body">
					<form action="<?=base_url('admin/login') ?>" method="post" enctype="multipart/form-data">
						<?php
						if(isset($error)) {
						?>
						<div class="alert alert-danger" role="alert"><?=$error ?></div>
						<?php
						}
						?>
						<input type="text" class="user" name="username" placeholder="Nhập Username" value="<?php echo set_value('username'); ?>">
						<?=form_error('username', '<p class="text-danger">', '</p>') ?>
						<input type="password" name="password" class="lock" placeholder="Mật khẩu" value="<?php echo set_value('password'); ?>">
						<?=form_error('password', '<p class="text-danger">', '</p>') ?>
						<div class="forgot-grid">
							<div class="forgot">
								<a href="#">Quên mật khẩu?</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" name="login" value="Đăng nhập">
					</form>
				</div>
			</div>

		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<p>&copy; 2018 - <?=date('Y') ?>. All Rights Reserved | Design by Minh Tuan</a>
		</p>
	</div>
	<!--//footer-->
	</div>

	<!-- //side nav js -->

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="<?=base_url('asset/') ?>js/classie.js"></script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="<?=base_url('asset/') ?>js/jquery.nicescroll.js"></script>
	<script src="<?=base_url('asset/') ?>js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="<?=base_url('asset/') ?>js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>