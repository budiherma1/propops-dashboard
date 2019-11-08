    <?php 
	// session_start();
	// if($_SESSION['status']!="login"){
	// 	$_SESSION['redirect_url'] = str_replace('/index.php','',$_SERVER['PHP_SELF']);
	// 	redirect(base_url('login?message=need_login'));
	// }
	?>

<!DOCTYPE html>
<html>
<head>
			        <link rel="stylesheet" href="{{ base_url('assets/css/uikit.min.css') }}" />
        <script src="{{ base_url('assets/js/uikit.min.js') }}"></script>
        <script src="{{ base_url('assets/js/uikit-icons.min.js') }}"></script>
	<link rel="icon" href="{{ base_url('assets/raa.png')}}" type="image/png">		
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Google Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		<script>
		  WebFont.load({
			google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		  });
		</script>
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

<!-- 		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png"> -->
		<!-- Stylesheet -->
		<link rel="stylesheet" href="{{ base_url('assets/assets/vendors/css/base/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ base_url('assets/assets/vendors/css/base/elisyam-1.5.min.css')}}">
		<!-- <script type="text/javascript" src="jspdf.debug.js"></script> -->
		<!-- Tweaks for older IEs--><!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	 <!-- load bootstrap css file -->
    <!-- <link href="redawning/assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- load custom css file -->
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/css/St12.css')}}">
    <link rel="icon" href="{{ base_url('assets/ra.png')}}" type="image/png">
    <script src="{{ base_url('assets/assets/vendors/js/base/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<!-- load icon file -->
 <!--    <link rel="icon" href="redawning/ra.png" type="image/png"> -->
 <style type="text/css">
	.backgroundred {
background-color: #FF3A19;

	}

	.backgroundgreen {
background-color: #7FC6A6;

	}


</style>

<style type="text/css">
	.checkbox {

		float: left;
		margin-right: 10px;
	}


.name5 {

	display: none;
}
</style>
	<title>{{ $title }}</title>
</head>	
<body id="page-top">





    <?php 
	// session_start();
	// if($_SESSION['status']!="login"){
	// 	header("location:login.php?message=need_login");
	// }
	?>
    
		<!-- Begin Preloader -->
		<div id="preloader">
			<div class="canvas">
				<img src="{{ base_url('assets/ra.png')}}" alt="logo" class="loader-logo">
				<div class="spinner"></div>   
			</div>
		</div>
		<!-- End Preloader -->
		<div class="page">
			<!-- Begin Header -->
			<header class="header">
				<nav class="navbar fixed-top">         
					<!-- Begin Search Box-->
					<div class="search-box">
						<button class="dismiss"><i class="ion-close-round"></i></button>
						<form id="searchForm" action="#" role="search">
							<input type="search" placeholder="Search something ..." class="form-control">
						</form>
					</div>
					<!-- End Search Box-->
					<!-- Begin Topbar -->
					<div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
						<!-- Begin Logo -->
						<div class="navbar-header">
							<a href="{{ base_url() }}" class="navbar-brand">
								<div class="brand-image brand-big">
									<img src="{{ base_url('assets/ra.png')}}" alt="logo" class="logo-big">
								</div>
								<div class="brand-image brand-small">
									<img src="{{ base_url('assets/logo-2x.png')}}" alt="logo" class="logo-small" style=" width: 36px;" >
								</div>
							</a>
							<!-- Toggle Button -->
							<a id="toggle-btn" href="#" class="menu-btn active">
								<span></span>
								<span></span>
								<span></span>
							</a>
							<!-- End Toggle -->
						</div>
						<!-- End Logo -->
						<!-- Begin Navbar Menu -->
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
							<!-- Search -->
<!--                             <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li> -->
							<!-- End Search -->

                            <!-- Begin Notifications -->
                            <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell "></i>
                            	<!-- <span class="badge-pulse"></span> -->
                            </a>
								<ul aria-labelledby="notifications" class="dropdown-menu notification">
									<li>
										<div class="notifications-header">
											<div class="title">Notification</div>
											<div class="notifications-overlay"></div>
											<img src="{{ base_url('assets/assets/cover.jpg')}}" alt="..." class="img-fluid" >
										</div>
									</li>
									<!-- <li>
										<a href="damage-waiver.php">
											<div class="message-icon">
												<i class="la la-puzzle-piece"></i>
											</div>
											<div class="message-body">
												<div class="message-body-heading">
													(NEW)Damage Waiver Check
												</div> -->
												<!-- time -->
<!-- 												<span class="date">
<?php 
// echo date("H",((time()-1557372412)))." Hours Ago";
// 1557372412


 ?>
												</span> -->
												<!-- endtime -->
											<!-- </div>
										</a>
									</li>
									<li>
										<a href="expedia-stopsold.php">
											<div class="message-icon">
												<i class="la la-server"></i>
											</div>
											<div class="message-body">
												<div class="message-body-heading">
													(NEW)Expedia Stop Sold
												</div> -->
<!-- 												<span class="date">
<?php 
// echo date("H",((time()-1557372412)))." Hours Ago";
// 1557372412


 ?>
												</span> -->
											<!-- </div>
										</a>
									</li>
									<li>
										<a href="validation.php">
											<div class="message-icon">
												<i class="la la-puzzle-piece"></i>
											</div>
											<div class="message-body">
												<div class="message-body-heading">
													(NEW)Validation Check Tool
												</div> -->
<!-- 												<span class="date">
<?php 
// echo date("H",((time()-1557372412)))." Hours Ago";
// 1557372412


 ?>
												</span> -->
											<!-- </div>
										</a>
									</li> -->
									
									<li>
										<a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">Close</a>
									</li>
								</ul>
							</li> 
							<!-- End Notifications -->
							<!-- User -->
					
							<li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{ base_url('assets/ava.jpg')}}" alt="..." class="avatar rounded-circle"></a>
								<ul aria-labelledby="user" class="user-size dropdown-menu">
									<li class="welcome">
										<!-- <a href="#" class="edit-profil"><i class="la la-gear"></i></a> -->
										<img src="{{ base_url('assets/ava.jpg')}}" alt="..." class="rounded-circle">
									</li>
									 <li align="center">
										
											<?php 
											// echo $_SESSION['username']; 
											?>
										
									</li>
																	<!--	 <li>
										<a href="pages-profile.html" class="dropdown-item"> 
											Profile
										</a>
									</li>
									 <li>
										<a href="app-mail.html" class="dropdown-item"> 
											Messages
										</a>
									</li>
									<li>
										<a href="#" class="dropdown-item no-padding-bottom"> 
											Settings
										</a>
									</li>
									<li class="separator"></li>
									<li>
										<a href="pages-faq.html" class="dropdown-item no-padding-top"> 
											Faq
										</a>
									</li> -->
									<li><a rel="nofollow" href="{{ base_url('login/logout') }}" class="dropdown-item logout text-center" ><i class="ti-power-off" ></i></a></li>
								</ul>
							</li>
							<!-- End User -->
							<!-- Begin Quick Actions -->
<!-- 							<li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li> -->
							<!-- End Quick Actions -->
						</ul>
						<!-- End Navbar Menu -->
					</div>
					<!-- End Topbar -->
				</nav>
			</header>
			<!-- End Header -->
			<!-- Begin Page Content -->
			<div class="page-content d-flex align-items-stretch">
				<div class="default-sidebar">
					<!-- Begin Side Navbar -->
					<nav class="side-navbar box-scroll sidebar-scroll">
						<!-- Begin Main Navigation -->
						<ul class="list-unstyled">
							<li><a href="{{ base_url() }}"><i class="la la-home"></i><span>Home</span></a></li>
							<li><a href="{{ base_url('backlog') }}"><i class="la la-hourglass-1"></i><span>RedAwning Backlog</span></a></li>
							<li><a href="{{ base_url('assignment') }}"><i class="la la-users"></i><span>Assignment</span></a></li>
							<li><a href="{{ base_url('scripts') }}"><i class="la la-code"></i><span>Scripts</span></a></li>
<!-- 							<li><a href="#dropdown-app1" aria-expanded="false" data-toggle="collapse"><i class="la la-area-chart"></i><span>Statistic</span></a>
								<ul id="dropdown-app1" class="collapse list-unstyled pt-0">
									<li><a href="daily_count.php"><del>Daily Count (RedAwning)</del></a></li>
									<li><a href="{{ base_url('allstatus') }}">Integration Status</a></li>
								</ul>
							</li> -->							
						</ul>
						<span class="heading">Tools</span>
						<ul class="list-unstyled">
							<li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la"><img src="{{ base_url('assets/raa.png')}}" style="max-height: 20px; "></i><span>RedAwning</span></a>
								<ul id="dropdown-app" class="collapse list-unstyled pt-0">
								<li><a href="{{ base_url('upload') }}">Facilities Bulk Upload</a></li>
									<li><a href="{{ base_url('trackhs') }}">TrackHS UserPass</a></li>
									<li><a href="{{ base_url('validation') }}">Validation</a></li>
									<li><a href="{{ base_url('damagewaiver') }}">Damage Waiver Check</a></li>
									<li><a href="{{ base_url('policy') }}">Property Policy</a></li>
<!-- 									<li><a href="{{ base_url('backup/ciirus_duplicate.php') }}"><del>Ciirus Duplicate</del></a></li>
									<li><a href="haapi_pending.php"><del>HAAPI Importing</del></a></li>
									<li><a href="cico.php"><del>CICO</del></a></li>
									<li><a href="crm.php"><del>CRM</del></a></li>
									<li><a href="sub.php"><del>Submission</del></a></li> -->
									
								</ul>
							</li>
							<li><a href="#dropdown-ui1" aria-expanded="false" data-toggle="collapse"><i class="la"><img src="{{ base_url('assets/expedia.png')}}" style="max-height: 20px; "></i><span>Expedia</span></a>
								<ul id="dropdown-ui1" class="collapse list-unstyled pt-0">
									<li><a href="{{ base_url('score') }}">Content Score Check</a></li>
									<li><a href="{{ base_url('stopsold') }}">Stop Sold Check(byNID)</a></li>
									<li><a href="{{ base_url('stopsold/byeid') }}">Stop Sold Check(byEID)</a></li>
									<li><a href="{{ base_url('stopsold/status') }}">Stop Sold List(autoCheck</a></li>
									<li><a href="{{ base_url('stopsold/roomtype') }}">Room TypeID Check</a></li>
								</ul>
							</li>		
							<li><a href="#dropdown-ui11" aria-expanded="false" data-toggle="collapse"><i class="la"><img src="{{ base_url('assets/taa.png')}}" style="max-height: 12px; "></i><span>Tripadvisor</span></a>
								<ul id="dropdown-ui11" class="collapse list-unstyled pt-0">
									<li><a href="{{ base_url('tripadvisor') }}">URLs Check</a></li>
								</ul>
							</li>					
							<li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la"><img src="{{ base_url('assets/fresh.ico')}}" style="max-height: 20px; "></i><span>FreshDesk</span></a>
								<ul id="dropdown-ui" class="collapse list-unstyled pt-0">
									<li><a href="{{ base_url('bulkticket') }}">Bulk Ticket Creation</a></li>
								</ul>
							</li>
						</ul>
						<span class="heading">KPI</span>
						<ul class="list-unstyled">
							<li><a href="#dropdown-authentication" aria-expanded="false" data-toggle="collapse"><i class="la la-level-down"></i><span>Zero Backlog</span></a>
								<ul id="dropdown-authentication" class="collapse list-unstyled pt-0">
									<li><a href="{{ base_url('zerobacklog') }}">Backlog Statistic</a></li>
									<li><a href="{{ base_url('zerobacklognid') }}">Backlog Daily</a></li>
									<li><a href="{{ base_url('zerobacklognid/dailyassignment') }}">Daily Assignment Number</a></li>
									<li><a href="{{ base_url('backlog/livenotreview') }}">Backlog LiveNotReviewed</a></li>
									<!-- <li><a href="{{ base_url('zerobacklognid/validation') }}">Backlog Validation</a></li> -->
									<!-- <li><a href="statisticnew.php">-</a></li> -->
								</ul>
							</li>
							<li><a href="#dropdown-authentication1" aria-expanded="false" data-toggle="collapse"><i class="la la-exchange"></i><span>High Velocity</span></a>
								<ul id="dropdown-authentication1" class="collapse list-unstyled pt-0">
									<li><a href="{{ base_url('highvelocity') }}">Velocity Statistic</a></li>
									<li><a href="{{ base_url('velocity_state') }}">Velocity each State</a></li>
									<li><a href="{{ base_url('velocity_list') }}">Velocity List</a></li>
									<!-- <li><a href="statisticnew.php">-</a></li> -->
								</ul>
							</li>
							
						</ul>
						<!-- End Main Navigation -->
					</nav>
					<!-- End Side Navbar -->
				</div>
				<!-- End Left Sidebar -->
				<div class="content-inner">
					<div class="container-fluid">
						<!-- Begin Page Header-->
						<div class="row">
							<div class="page-header">
								<div class="d-flex align-items-center">
									<h2 class="page-header-title">{{ $title }}</h2>
									<!-- <div>
										<ul class="breadcrumb">
											<li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
											<li class="breadcrumb-item active">Statistic/Integration Status</li>
										</ul>
									</div> -->
								</div>
							</div>
						</div>
						<!-- End Page Header -->
						
							
								
