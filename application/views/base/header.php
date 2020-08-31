
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prozim - Find a Professional and Book a Consultation by Appointment, Chat or Video call">
    <meta name="author" content="Ansonika">
    <title>TNPSC CAREER(Build Your Dream Job Here)</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url()?>/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url()?>/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url()?>/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url()?>/assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/submit.css" rel="stylesheet">
    <!-- SPECIFIC CSS -->
    <link href="<?php echo base_url()?>/assets/css/home.css" rel="stylesheet">
 <link href="<?php echo base_url()?>/assets/css/listing.css" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url()?>/assets/css/custom.css" rel="stylesheet">
     <link href="<?php echo base_url()?>/assets/css/help.css" rel="stylesheet">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f4c9ea0dc8707001906e0e1&product=sop' async='async'></script>
</head>

<body>
				
	<header class="header clearfix element_to_stick">
		<div class="container-fluid">
		<div id="logo" style="margin-left: 30px">
			<a href="<?php echo base_url()?>">
				<img src="<?php echo base_url()?>/assets/img/logo-w.png" width="200px" height="40px" alt="" class="logo_normal">
				<img src="<?php echo base_url()?>/assets/img/logo.png" width="200px" height="40px" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#sign-in-dialog" id="sign-in" class="btn_access">Log In</a></li>
			<li><a href="#sign-in-dialog1" id="sign-in" class="btn_access green">Join Free</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/assets/img/logo.png" width="250px" height="75" alt=""></a>
			</div>
			<ul>
				<li class="submenu">
					<a href="#0" class="show-submenu">Exams</a>
					<ul>
						<?php foreach($exams as $row){?>
						<li><a href="<?php echo base_url()?>exam/<?php echo $row->id;?>"><?php echo $row->exams_name;?></a></li>
					<?php } ?>
						
					</ul>
				</li>
				<li class="submenu">
					<a href="<?php echo base_url()?>syllabus" class="show-submenu">Syllabus</a>
					
				</li>
				<li class="submenu">
					<a href="<?php echo base_url()?>notifications" class="show-submenu">Notifications</a>
					
				</li>
				<li class="submenu">
					<a href="<?php echo base_url()?>currentaffairs" class="show-submenu">Current Affairs</a>
					
				</li>
				
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->