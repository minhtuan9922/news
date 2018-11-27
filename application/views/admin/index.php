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
	<link href="<?=base_url() ?>asset/css/bootstrap.css" rel='stylesheet' type='text/css'/>

	<!-- Custom CSS -->
	<link href="<?=base_url() ?>asset/css/style.css" rel='stylesheet' type='text/css'/>

	<!-- font-awesome icons CSS -->
	<link href="<?=base_url() ?>asset/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href='<?=base_url() ?>asset/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	<!-- //side nav css file -->

	<!-- js-->
	<script src="<?=base_url() ?>asset/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url() ?>asset/js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- chart -->
	<script src="<?=base_url() ?>asset/js/Chart.js"></script>
	<!-- //chart -->
	<!-- Metis Menu -->
	<script src="<?=base_url() ?>asset/js/metisMenu.min.js"></script>
	<script src="<?=base_url() ?>asset/js/custom.js"></script>
	<link href="<?=base_url() ?>asset/css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
<!--	<link href="<?=base_url() ?>asset/css/froala_editor.css" rel="stylesheet">-->
	<link href="<?=base_url() ?>asset/css/froala_editor.pkgd.min.css" rel="stylesheet">
<!--	<script src="<?=base_url() ?>asset/js/froala_editor.min.js"></script>-->
	<script src="<?=base_url() ?>asset/js/froala_editor.pkgd.min.js"></script>
	<script src="<?=base_url() ?>asset/js/languages/vi.js"></script>
	<style>
		#chartdiv {
			width: 100%;
			height: 295px;
		}
	</style>
	<!--pie-chart -->
	<!-- index page sales reviews visitors pie chart -->
	<script src="<?=base_url() ?>asset/js/pie-chart.js" type="text/javascript"></script>
	<script type="text/javascript">
		$( document ).ready( function () {
			$( '#demo-pie-1' ).pieChart( {
				barColor: '#2dde98',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function ( from, to, percent ) {
					$( this.element ).find( '.pie-value' ).text( Math.round( percent ) + '%' );
				}
			} );

			$( '#demo-pie-2' ).pieChart( {
				barColor: '#8e43e7',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function ( from, to, percent ) {
					$( this.element ).find( '.pie-value' ).text( Math.round( percent ) + '%' );
				}
			} );

			$( '#demo-pie-3' ).pieChart( {
				barColor: '#ffc168',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function ( from, to, percent ) {
					$( this.element ).find( '.pie-value' ).text( Math.round( percent ) + '%' );
				}
			} );


		} );
	</script>
	<!-- //pie-chart -->
	<!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
	<link href="<?=base_url() ?>asset/css/owl.carousel.css" rel="stylesheet">
	<script src="<?=base_url() ?>asset/js/owl.carousel.js"></script>
	<script>
		$( document ).ready( function () {
			$( "#owl-demo" ).owlCarousel( {
				items: 3,
				lazyLoad: true,
				autoPlay: true,
				pagination: true,
				nav: true,
			} );
		} );
	</script>
	<!-- //requried-jsfiles-for owl -->
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- main content start-->
		<?php
		$this->load->view('admin/home/menu_left');
		$this->load->view('admin/home/header');
		$this->load->view($content);
		$this->load->view('admin/home/footer');
		?>
		
	</div>

	<!-- new added graphs chart js-->

	

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="<?=base_url() ?>asset/js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			body = document.body;

		showLeftPush.onclick = function () {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toright' );
			classie.toggle( menuLeft, 'cbp-spmenu-open' );
			disableOther( 'showLeftPush' );
		};


		function disableOther( button ) {
			if ( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="<?=base_url() ?>asset/js/jquery.nicescroll.js"></script>
	<script src="<?=base_url() ?>asset/js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='<?=base_url() ?>asset/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$( '.sidebar-menu' ).SidebarNav()
	</script>
	<!-- //side nav js -->

	


	<!-- Bootstrap Core JavaScript -->
	<script src="<?=base_url() ?>asset/js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>