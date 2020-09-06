<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TNPSC CAREER(Build Your Dream Job Here),tnpsc exam,tnspc notification,tnpsc syllabus,tnpsc career,tnpsc exam details">
    <meta name="author" content="Tnpsc Career">
    <title title="tnpsc career register">TNPSC CAREER(Build Your Dream Job Here)</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url()?>/assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url()?>/assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url()?>/assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url()?>/assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php echo base_url()?>/assets/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="<?php echo base_url()?>/assets/css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url()?>/assets/css/custom.css" rel="stylesheet">
    
</head>

<body title="tnpsc career register" id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
				<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/assets/img/logo.png" width="170" height="40" alt="" class="logo_sticky"></a>
			</figure>
			<div class="access_social">
					<a href="#0" class="social_bt facebook">Register with Facebook</a>
					<a href="#0" class="social_bt google">Register with Google</a>
				</div>
            <div class="divider"><span>Or</span></div>
			<form autocomplete="off" action="<?php echo base_url(); ?>login/register_process" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input class="form-control" type="text" name="first_name" placeholder="Name">
					<i class="icon_pencil-edit"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="last_name" placeholder="Last Name">
					<i class="icon_pencil-edit"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="mobile" placeholder="Mobile Number">
					<i class="icon_pencil-edit"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="email" name="email" placeholder="Email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" id="password1" placeholder="Password">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password"  id="password2" placeholder="Confirm Password">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<input type="submit" name="submit" class="btn_1 rounded full-width" value="Register Now!">
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="<?php echo base_url()?>login">Sign In</a></strong></div>
			</form>
			
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo base_url()?>/assets/js/common_scripts.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/common_func.js"></script>
    <script src="<?php echo base_url()?>/assets/assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?php echo base_url()?>/assets/js/pw_strenght.js"></script>	
  
</body>
</html>