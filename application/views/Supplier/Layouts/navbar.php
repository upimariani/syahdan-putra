<body>
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
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<div class="mobile-search waves-effect waves-light">
							<div class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-addon search-close"><i class="ti-close"></i></span>
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
									</div>
								</div>
							</div>
						</div>
						<!-- <a href="index.html">
							<img class="img-fluid" src="<?= base_url('asset/mega-able-lite/') ?>assets/images/logo.png" alt="Theme-Logo" />
						</a> -->
						<a class="mobile-options waves-effect waves-light">
							<i class="ti-more"></i>
						</a>
					</div>


				</div>
			</nav>

			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img class="img-80 img-radius" src="<?= base_url('asset/mega-able-lite/') ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
									<div class="user-details">
										<span id="more-details">Supplier<i class="fa fa-caret-down"></i></span>
									</div>
								</div>

								<div class="main-menu-content">
									<ul>
										<li class="more-details">
											<a href="<?= base_url('cLogin/logout') ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="<?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cDashboard') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Supplier/cDashboard') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>

							</ul>
							<div class="pcoded-navigation-label" data-i18n="nav.category.forms">Kelola Data</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="<?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cPadi') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Supplier/cPadi') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-tag"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Data Padi</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>


							</ul>

							<div class="pcoded-navigation-label" data-i18n="nav.category.forms">Transaksi</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="<?php if ($this->uri->segment(1) == 'Supplier' && $this->uri->segment(2) == 'cTransaksiPadi') {
												echo 'active';
											}  ?>">
									<a href="<?= base_url('Supplier/cTransaksiPadi') ?>" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="ti-bag"></i><b>FC</b></span>
										<span class="pcoded-mtext" data-i18n="nav.form-components.main">Transaksi Padi</span>
										<span class="pcoded-mcaret"></span>
									</a>
								</li>



						</div>
					</nav>