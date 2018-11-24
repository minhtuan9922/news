<!DOCTYPE HTML>
<html>
<head>
	<title><?=$title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="<?=base_url() ?>css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
	<link href="<?=base_url() ?>css/style.css" rel='stylesheet' type='text/css'/>
	<script src="<?=base_url() ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url() ?>js/bootstrap.min.js"></script>
	<!-- animation-effect -->
	<link href="<?=base_url() ?>css/animate.min.css" rel="stylesheet">
	<script src="<?=base_url() ?>js/wow.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/component.css" />
	<script src="<?=base_url() ?>js/modernizr.custom.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- //animation-effect -->
</head>

<body>
	<?php
		$this->load->view('home/header');
		$this->load->view($content);
		$this->load->view('home/footer');
	?>
</body>
</html>