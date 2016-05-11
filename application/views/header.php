<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rumah Negara Gol. III</title>

	<link rel="icon" href="<?=base_url()?>assets/images/favicon.ico">

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/sele ct2.min.css" rel="stylesheet" /> -->
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/core/libraries/jquery.min.js"></script>	
	<script type="text/javascript" src="<?=base_url()?>assets/js/pages/animations_css3.js"></script>
<!-- 	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script> -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->

	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<!-- 	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script> -->
	<script src="<?=base_url()?>assets/js/select2.min.js"></script>
	<!-- Date -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/js/core/app.js"></script>
	
	<!-- Date -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/pages/picker_date.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<!-- /theme JS files -->

	<!-- /theme JS files -->
	<script src="<?=base_url()?>assets/js/highchart/highcharts.js"></script>
	
	<script src="<?=base_url()?>assets/js/highchart/exporting.js"></script>	
	<script src="<?=base_url()?>assets/js/highchart/drilldown.js"></script>	
</head>

<body class="navbar-top">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top bg-header">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=base_url()?>dashboard"><img src="<?=base_url()?>assets/images/logo_light_ciptakarya.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block ">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<p class="navbar-text">
					<span class="label bg-success">Online</span>
				</p>
			</ul>

			<ul class="nav navbar-nav navbar-right">

			
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user"></i>
						<span><?=$this->session->userdata('session')['username']?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<!-- <li><a href="#"><i class="icon-display4"></i> Lihat Website</a></li>
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li> -->
						<li><a href="<?=base_url()?>login/logout"><i class="icon-switch2"></i> Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

		<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><i class="icon-user"></i></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?=$this->session->userdata('session')['username']?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Jakarta, Indonesia
									</div>
								</div>

								<!-- <div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Menu</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?=base_url()?>dashboard"><i class="icon-home4 active"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack"></i> <span>Data Komponen Input</span></a>
									<ul>
										<li>
										<a href="#"><i class="icon-home"></i> <span>Detail Bangunan</span></a>
										<ul>
											<li><a href="<?=base_url()?>component/viewlembaga">Kelembagaan</a></li>
											<li><a href="<?=base_url()?>component/viewkonstruksi">Konstruksi</a></li>
											<li><a href="<?=base_url()?>component/viewtipe">Tipe</a></li>
										</ul>
										</li>

										<li>
										<!--<a href="#"><i class="icon-pin"></i> <span>Kedaerahan</span></a>
										<ul>
											<li><a href="<?=base_url()?>component/viewarsipruangan">Provinsi</a></li>
											<li><a href="<?=base_url()?>component/viewarsiprollpact">Kabupaten</a></li>
											<li><a href="<?=base_url()?>component/viewarsiplemari">Kecamatan</a></li>
										</ul>
										</li>
										-->
										<li>
										<a href="#"><i class="icon-archive"></i> <span>Arsip</span></a>
										<ul>
											<li><a href="<?=base_url()?>component/viewarsipruangan">Ruangan Arsip</a></li>
											<li><a href="<?=base_url()?>component/viewarsiprollpact">Rollpact Arsip</a></li>
											<li><a href="<?=base_url()?>component/viewarsiplemari">Lemari Arsip</a></li>
											<li><a href="<?=base_url()?>component/viewarsiprak">Rak Arsip</a></li>
											<li><a href="<?=base_url()?>component/viewarsipbox">Box Arsip</a></li>
										</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-home"></i> <span>Data Rumah Negara Gol. III</span></a>
									<ul>
										<li><a href="<?=base_url()?>rumah">Lihat Semua</a></li>
										<li><a href="<?=base_url()?>rumah/add">Tambah Data</a></li>
									</ul>
								</li>
								<!-- <li><a href="#"><i class="icon-list-unordered"></i> <span>Help</span></a></li> -->
								<!-- /main -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>

			<?=$content?>

								<div class="footer text-muted">
						&copy; 2016. <a href="#">AMC Web App</a> by <a href="#" target="_blank">PT Ganeshaglobal Sarana</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<!-- revisi dropdown edit -->
	<script type="text/javascript">
		function determineDropDirection(){
		  $(".dropdown-menu").each( function(){

		    // Invisibly expand the dropdown menu so its true height can be calculated
		    $(this).css({
		      visibility: "hidden",
		      display: "block"
		    });

		    // Necessary to remove class each time so we don't unwantedly use dropup's offset top
		    $(this).parent().removeClass("dropup");

		    // Determine whether bottom of menu will be below window at current scroll position
		    if ($(this).offset().top + $(this).outerHeight() > $(window).innerHeight() + $(window).scrollTop()){
		      $(this).parent().addClass("dropup");
		    }

		    // Return dropdown menu to fully hidden state
		    $(this).removeAttr("style");
		  });
		}

		determineDropDirection();

		$(window).scroll(determineDropDirection);

	</script>
</body>

</html>
