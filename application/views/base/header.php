
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TNPSC CAREER(Build Your Dream Job Here),tnpsc exam,tnspc notification,tnpsc syllabus,tnpsc career,tnpsc exam details">
    <meta name="author" content="Tnpsc Career">
    <meta property="og:title" content="Tnpsc Career" /> 
<meta property="og:description" content="Exam Details" />
<meta property="og:image" content="<?php echo base_url()?>/assets/img/register.png" />
<meta property="og:video" content="http://www.youtube.com/v/1F7DKyFt5pY&fs=1" />
<meta property="og:video:width" content="560" />
<meta property="og:video:height" content="340" />
<meta property="og:video:type" content="application/x-shockwave-flash" />
    <title title="tnpsc career login">TNPSC CAREER(Build Your Dream Job Here)</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/favicon.png" type="image/x-icon">
    
    <link rel="apple-touch-icon" type="image/x-icon" sizes="600x600" href="<?php echo base_url()?>/assets/img/register.png">

    <!-- BASE CSS -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/submit.css" rel="stylesheet">
    <!-- SPECIFIC CSS -->
    <link href="<?php echo base_url()?>/assets/css/home.css" rel="stylesheet">
 <link href="<?php echo base_url()?>/assets/css/listing.css" rel="stylesheet">
 <link href="<?php echo base_url()?>assets/css/detail-page.css" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url()?>/assets/css/custom.css" rel="stylesheet">
     <link href="<?php echo base_url()?>/assets/css/help.css" rel="stylesheet">
     <link href="<?php echo base_url()?>/assets/css/account.css" rel="stylesheet">
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
</head>

<body>
				
	<header class="header clearfix element_to_stick">
		<div class="container-fluid">
		<div id="logo" style="margin-left: 30px">
			<a href="<?php echo base_url()?>">
				<img title="TNPSC CAREER (BUILD YOUR LIFE)" src="<?php echo base_url()?>/assets/img/logo-w.png" width="200px" height="40px" alt="" class="logo_normal">
				<img src="<?php echo base_url()?>/assets/img/logo.png" width="200px" height="40px" alt="" class="logo_sticky">
			</a>
		</div>
		<?php $user_id=$this->session->userdata('user_id'); if($user_id=='') { ?>
		<ul id="top_menu">

			<li><a href="<?php echo base_url()?>login"  class="btn_access">Log In</a></li>
			
			<li><a href="<?php echo base_url()?>register"  class="btn_access green">Join Free</a></li>
		
		</ul>
		<?php } else {?>
			<ul id="top_menu" class="drop_user">
			<li>
				<div class="dropdown user clearfix">
				    <a href="#" data-toggle="dropdown">
				        <figure><img src="img/avatar1.jpg" alt=""></figure><?php echo $this->session->userdata('first_name');?> <?php echo $this->session->userdata('last_name');?>
				    </a>
				    <div class="dropdown-menu">
				        <div class="dropdown-menu-content">
				            <ul>
				            	<li><a href="#0"><i class="icon_cog"></i>Dashboard</a></li>
				            	<li><a href="#0"><i class="icon_document"></i>Bookings</a></li>
				            	<li><a href="#0"><i class="icon_mail"></i>Messages</a></li>
				            	<li><a href="<?php echo base_url()?>login/logout"><i class="icon_key"></i>Log out</a></li>
				            </ul>
				        </div>
				    </div>
				</div>
				<!-- /dropdown -->
			</li>
		</ul>
		<?php } ?>
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
						<li><a title="<?php echo $row->exams_name;?>" href="<?php echo base_url()?>exam/<?php echo $row->id;?>"><?php echo $row->exams_name;?></a></li>
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