<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mega Able bootstrap admin template by codedthemes </title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="codedthemes" />
	<!-- Favicon icon -->

	<link rel="icon" href="<?= base_url('asset/mega-able-lite/') ?>assets/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/mega-able-lite/') ?>assets/css/bootstrap/css/bootstrap.min.css">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?= base_url('asset/mega-able-lite/') ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/mega-able-lite/') ?>assets/icon/themify-icons/themify-icons.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/mega-able-lite/') ?>assets/icon/icofont/css/icofont.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/mega-able-lite/') ?>assets/icon/font-awesome/css/font-awesome.min.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/mega-able-lite/') ?>assets/css/style.css">
</head>

<body themebg-pattern="theme1">
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="loader-track">
			<div class="preloader-wrapper">
				<div class="spinner-layer spinner-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-yellow">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->

	<section class="login-block">
		<!-- Container-fluid starts -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- Authentication card start -->

					<form action="<?= base_url('cLogin') ?>" method="post" class="md-float-material form-material">

						<div class="auth-box card">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center">Login</h3>
										<?php if ($this->session->userdata('success')) {
										?>
											<div class="alert alert-success alert-dismissible">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												<h5><i class="ti-check"></i> Alert!</h5>
												<?= $this->session->userdata('success') ?>
											</div>
										<?php
										} ?>
										<?php if ($this->session->userdata('error')) {
										?>
											<div class="alert alert-danger alert-dismissible">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												<h5><i class="ti-alert"></i> Alert!</h5>
												<?= $this->session->userdata('error') ?>
											</div>
										<?php
										} ?>
									</div>
								</div>
								<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
								<div class="form-group form-primary">
									<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Username">
									<span class="form-bar"></span>

								</div>

								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								<div class="form-group form-primary">
									<input type="password" name="password" class="form-control" placeholder="Password">
									<span class="form-bar"></span>
								</div>
								<hr>
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								<label>Hak Akses User</label>
								<div class="form-group form-primary">
									<select class="form-control" name="hak_akses">
										<option value="">---Pilih Hak Akses---</option>
										<option value="1">Admin</option>
										<option value="2">Supplier</option>
										<option value="1">Reseller</option>
									</select>
									<span class="form-bar"></span>
								</div>
								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
										<p>Apakah anda belum memiliki akun Reseller? <a href="<?= base_url('cLogin/registrasi') ?>">Registrasi Here!</a></p>
									</div>
								</div>

							</div>
						</div>
					</form>
					<!-- end of form -->
				</div>
				<!-- end of col-sm-12 -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container-fluid -->
	</section>
	<!-- Warning Section Starts -->
	<!-- Older IE warning message -->
	<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/popper.js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
	<!-- waves js -->
	<script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/waves/js/waves.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/SmoothScroll.js"></script>
	<script src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
	<!-- i18next.min.js -->
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>bower_components/i18next/js/i18next.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
	<script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/common-pages.js"></script>
</body>

</html>