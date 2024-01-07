<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Qoduby - Admin & Dashboard template by tempload.">
	<meta name="keywords" content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates">
	<meta name="author" content="tempload">	
	<title>Qoduby - Admin & Dashboard Template</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/media/logo/favicon.png">	

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../../css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Global CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- Light-Dark Mode & Theme Direction Selector -->
	<script src="assets/js/theme.js" crossorigin="anonymous"></script>
</head>
<body>

    @extends('layouts.admin')

@section('contenu')
	<!-- Add Modal Start --> // Liste Formulaire 
	<div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form method="post" action="" id="addcar" class="needs-validation" novalidate="">
					<div class="modal-header px-4">
						<h5 class="modal-title fs-5">Ajouter une voiture</h5>
						<button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x" stroke-width="1.5" class="text-body"></i>
						</button>
					</div>
					<div class="modal-body p6 px-3">
						<div class="container-fluid">
							<div class="row mb5">
								<div class="col-12">
									<label for="add-car-form-1" class="form-label">
										<span>Choisir une photo</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Supports: *.png or *.jpg"></i>
									</label>
									<div id="drop-area" class="d-flex bg-light">
										<div class="width-180 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center">
											<i data-feather="image" stroke-width="1.5" class="text-body"></i>
											<div class="img-fix width-180 height-120 position-absolute top-0 start-0">
												<img id="preview-img" src="assets/media/cars/1.jpg" class="">
											</div>
										</div>
										<div class="d-flex flex-grow-1 align-items-center justify-content-center">
											<div class="d-flex flex-column justify-content-start align-items-center">
												<strong class="d-block mb2">Glisser-déposer</strong>
												<span class="d-block mb2">OU</span>
												<label for="fileElem" id="fileSelect" class="d-block mb3 text-primary">Browse Photo</label>
												<small>Supports: *.png, *.jpg and *.jpeg</small>
											</div>
										</div>
										<input type="file" id="fileElem" accept="image/*" class="d-none">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 mb5">
									<label for="add-car-form-2" class="form-label">
										<span>Marque</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Choose a car brand from the list."></i>
									</label>
									<select id="add-car-form-2" class="form-select js-choice" required="">
										<option value="">Choisir la marque</option>
										<option value="1" selected="">Volkswagen</option>
										<option value="2">Mercedes</option>
										<option value="3">Toyota</option>
										<option value="4">Nissan</option>
										<option value="5">Subaru</option>
									</select>
									<div class="invalid-feedback">Veuillez choisir une marque.</div>
								</div>
								<div class="col-sm-6 mb5">
									<label for="add-car-form-3" class="form-label">
										<span>Modèle</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="After choosing a brand, choose a model."></i>
									</label>
									<select id="add-car-form-3" class="form-select js-choice" required="">
										<option value="">Choisir un modèle</option>
										<option value="1" selected="">Golf TSI 2017</option>
										<option value="2">AMG GT 2019</option>
										<option value="3">4Runner 2018</option>
										<option value="4">Altima 2020</option>
										<option value="5">Outback 2019</option>
									</select>
									<div class="invalid-feedback">Veuillez choisir un modèle.</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 mb5">
									<label for="add-car-form-4" class="form-label">
										<span>Année</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Select the traffic license date of the car."></i>
									</label>
									<select id="add-car-form-4" class="form-select js-choice" required="">
										<option value="">Select Year</option>
										<option value="1">2023</option>
										<option value="2">2022</option>
										<option value="3">2021</option>
										<option value="4">2020</option>
										<option value="5" selected="">2019</option>
									</select>
									<div class="invalid-feedback">Veuillez choisir une année.</div>
								</div>
								<div class="col-sm-6 mb5">
									<label for="add-car-form-5" class="form-label">
										<span>Statut</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Select the status of the car being published on the site."></i>
									</label>
									<select id="add-car-form-5" class="form-select js-choice" required="">
										<option value="">Choisir le statut</option>
										<option value="1" selected="">Published</option>
										<option value="2">Inactive</option>
										<option value="3">Scheduled</option>
									</select>
									<div class="invalid-feedback">Veuillez choisir un statut.</div>
								</div>
							</div>		
							
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Modal End -->

	<div class="app-root d-flex flex-column">
		<!-- ***** Sidebar Start ***** -->
		<div class="app-sidebar">
			<!-- ***** Logo Start ***** -->
			<div class="sidebar-logo d-flex justify-content-center">
				<a href="index.html">
					<img src="assets/media/logo/logo-default.svg" height="30" alt="Qoduby">
				</a>
			</div>
			<!-- ***** Logo End ***** -->

			<!-- ***** Sidebar Menu Start ***** -->
			<div class="sidebar-menu custom-scroll pt-4">
				<!-- ***** Dashboards Menu Start ***** -->
				<ul class="menu-group m-0 px-4 mb-4">
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="home" stroke-width="1.5" height="20" class="me2"></i>
								<span>Dashboards</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						
					</li>
				</ul>
				<!-- ***** Dashboards Menu End ***** -->

				<!-- ***** Projects Menu Start ***** -->
				
				
				<!-- ***** Projects Menu End ***** -->

				

			</div>
					<!-- ***** Sidebar Menu End ***** -->

			<!-- ***** Sidebar Footer Start ***** -->
			<div class="sidebar-footer d-flex align-items-center justify-content-center">
		<a href="../../../../documentation/index.html" class="sidebar-footer-button">Parametre</a>
			</div>
			<!-- ***** Sidebar Footer End ***** -->
		</div>
		<!-- ***** Sidebar End ***** -->

		<!-- ***** Responsive Menu Backdrop Start ***** -->
		<div class="menu-backdrop"></div>
		<!-- ***** Responsive Menu Backdrop End ***** -->
		
		<!-- ***** Main Start ***** -->
		<main class="app-main">
			<!-- ***** Header Start ***** -->
			<header class="main-header d-flex justify-content-between">
				<!-- ***** Sidebar Menu Open Button Start ***** -->
				<a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
				<!-- ***** Sidebar Menu Open Button End ***** -->

				<!-- ***** Navbar Start ***** -->
				<nav class="top-nav">
					<ul class="menu-group">
						<!-- ***** Dashboards Menu Start ***** -->
						<li class="sub-menu open-mega-menu">
							<a class="menu-link" href="javascript:;">
								Dashboards
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="mega-menu-wrapper">
								<div class="mega-menu">
									<div class="container-fluid">
										<div class="row g-0 align-items-center">
											<div class="col-lg-7 mb-sm-1">
												<div class="cover">
													<img src="assets/media/menu/1.jpg" class="img-fluid w-100" alt="">
													<div class="text p-3 d-flex align-items-center justify-content-center">
														
													</div>
												</div>
											</div>
											<div class="col-lg-5">
												<div class="menu-content ps6 sm-p-0">
													<strong class="text-heading d-block mb-2">DASHBOARDS</strong>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- ***** Dashboards Menu End ***** -->
					</ul>
				</nav>
				<!-- ***** Navbar End ***** -->

				<div class="header-tools d-flex align-items-center">
					<!-- ***** Search Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="p3">
								<div class="w-100 position-relative d-flex align-items-center">
									<i data-feather="search" stroke-width="2" height="22" class="text-body-tertiary position-absolute"></i>
									<input type="text" class="form-control border-0 outline-none input-reset ps6 bg-transparent" placeholder="Search...">
								</div>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5 d-flex flex-row justify-content-between">
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-primary-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="message-circle" stroke-width="2" height="36" class="text-primary"></i>
									</div>
									<span>Chat</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-info-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="folder" stroke-width="2" height="36" class="text-info"></i>
									</div>
									<span>Files</span>
								</a>
								
								
								
							</div>

							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Search Dropdown End ***** -->

					<!-- ***** Chat Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-disablescrolling="false">
							<i data-feather="message-square" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Chat Content Start ***** -->
						<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
							<div class="offcanvas-header p6">
								<div class="d-flex">
									<div class="d-flex align-items-center">
										<div class="position-relative">
											<div class="img-fix rounded-circle me3 height-40 width-40">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
										</div>
										<h6 class="mb0">Justin Case</h6>
									</div>
								</div>
								<div class="d-flex">
									<div class="dropdown">
										<button type="button" class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
											<i data-feather="more-horizontal" stroke-width="2" height="22" class="text-body"></i>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="archive" stroke-width="1.5" height="14" class="text-body me1"></i>
													Archive
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="mic-off" stroke-width="1.5" height="16" class="text-body me1"></i>
													Muted
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
													<div class="d-flex align-items-center">
														<i data-feather="trash-2" stroke-width="1.5" height="16" class="text-body me1"></i>
														Delete
													</div>
													<i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
												</a>
											</li>
										</ul>
  									</div>
									<button type="button" class="border-0 bg-transparent p0 outline-none" data-bs-dismiss="offcanvas" aria-label="Close">
										<i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
									</button>
								</div>
							</div>
							<div class="offcanvas-body p0 overflow-hidden">
								<div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>48 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Hi, can you send me the files of the new project by email?</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>46 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">I don't have all the files. I can only send documents.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>43 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Okey send.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>40 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 mb1 bg-light rounded">
											<a href="#" class="text-heading d-flex align-items-center text-decoration-none">
												<i data-feather="file" stroke-width="1.5" height="22" class="text-heading me2"></i>
												New Project.docx
											</a>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">This file contains all the information.</span>
										</div>
									</div>

									
								</div>
							</div>
							<div class="p6 bg-light">
								<div class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
									<div>
										<a href="#" class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
											<i data-feather="paperclip" stroke-width="1.5" height="18" class="text-body"></i>
										</a>
									</div>
									<div class="w-100">
										<input type="text" class="form-control border-0 outline-none input-reset bg-transparent" placeholder="Type your message here">
									</div>
									<div>
										<a href="#" class="width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="send" stroke-width="1.5" height="22" class="text-body"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- ***** Chat Content Start ***** -->
					</div>
					<!-- ***** Chat End ***** -->

					<!-- ***** Notification Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="d-flex justify-content-between align-items-center p5">
								<h6 class="mb0">Notifications</h6>
								<span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img src="assets/media/avatars/1.jpg" alt="">
									</div>

								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="dollar-sign" stroke-width="1.5" height="22" class="text-primary"></i>
										</div>
									</div>
									
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="bar-chart-2" stroke-width="1.5" height="22" class="text-success"></i>
										</div>
									</div>
									
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
									</div>
									
								</a>
								<hr class="opacity-20 border-dashed">
								<a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read All Notifications</a>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Notification Dropdown End ***** -->

					<!-- ***** Profile Dropdown Start ***** -->
					<div class="dropdown">
						<!-- ***** Profile Image Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="img-fix width-40 height-40 rounded">
								<img src="assets/media/avatars/6.jpg" alt="">
							</div>
						</a>
						<!-- ***** Profile Image End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-250 p0">
							<!-- ***** Content Info Start ***** -->
							<div class="d-flex justify-content-start mb3 p5 pb0">
								<div class="img-fix width-40 height-40 me3 rounded">
									<img src="assets/media/avatars/6.jpg" alt="">
								</div>
								<div class="d-flex flex-column text-start">
									<div class="d-flex flex-row align-items-center">
										<strong class="text-heading me1">ASSOGBA Dominique</strong>
										<span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
									</div>
									<small>@Spuer Tronics</small>
								</div>
							</div>
							<!-- ***** Content Info End ***** -->

							<!-- ***** Balance Start ***** -->
							<div class="p5 pt0">
								<div class="bg-secondary-subtle p3 rounded d-flex justify-content-between">
									<span>Balance</span>
									<strong class="text-heading">$3.754,45</strong>
								</div>
							</div>
							<hr class="opacity-20 mt0">
							<!-- ***** Balance End ***** -->

							<!-- ***** Menu Start ***** -->
							<div class="p5 pt0 pb0">
								<ul class="nav flex-column text-start p0">
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-overview.html">My Profile</a>
									</li>
									
									
								</ul>
							</div>
							<hr class="opacity-20">
							<!-- ***** Menu End ***** -->

							
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Profile Dropdown End ***** -->

					<!-- ***** Header Menu Open Button Start ***** -->
					<a class="header-menu-trigger ms3"><span>Menu</span></a>
					<!-- ***** Header Menu Open Button End ***** -->
				</div>
			</header>
			<!-- ***** Header End ***** -->

			<!-- ***** Content Start ***** -->
			<div class="app-content p6 pb2 smp1">
				<div class="container p0">
					<!-- Page Top Start -->
					<div class="row mb6 align-items-center">
						<div class="col-md-6 mobile-bottom-fix">
							<h1 class="page-title mb2"></h1>
							<nav class="breadcrumb-nav" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Liste vehicule</a></li>
									<li class="breadcrumb-item"><a href="#">Details du vehicule</a></li>
									<!--<li class="breadcrumb-item active" aria-current="page">Volkswagen - Golf TSI 2017</li>-->
								</ol>
							</nav>
						</div>
						<div class="col-md-6 text-start text-md-end">
							<!-- Add Button Start-->
							<button class="btn btn-primary btn-soft" data-bs-toggle="modal" data-bs-target="#addCarModal">Modifier Vehicule</button>
							<!-- Add Button End-->
						</div>
					</div>
					<!-- Page Top End -->

					<!-- Info Start -->
					<div class="row">
						<!-- Left Rows Start -->
						<div class="col-xxl-8">
							<!-- Info Card Start -->
							<div class="row">
								<div class="col-12 mb6">
									<div class="card shadow-card p6">
										<div class="row align-items-center">
											<div class="col-md-7 mobile-bottom-fix">
												<div class="w-100 height-280 img-fix rounded">
                                                    <img src="{{ $voiture->image }}" alt="{{ $voiture->image }}">
													
												</div>
											</div>
											<div class="col-md-5">
												<div class="row mb6">
													<div class="col-5">
														<span>Marque</span>
													</div>
													<div class="col-7">
                                                        <strong>{{ $voiture->marque->nom }}</strong> 
														
													</div>
												</div>
												<div class="row mb6">
													<div class="col-5">
														<span>Modele</span>
													</div>
													<div class="col-7">
                                                        <strong class="text-heading">{{ $voiture->modele->nom }}</strong>
														
													</div>
												</div>
												<div class="row mb6">
													<div class="col-5">
														<span>Annee</span>
													</div>
													<div class="col-7">
                                                        <strong class="text-heading">{{ $voiture->annee }}</strong>													</div>
												</div>
												<div class="row mb6">
													<div class="col-5">
														<span>Plaque Immatriculation</span>
													</div>
													<div class="col-7">
														<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
															<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">D</div>
															<div class="w-100 d-flex align-items-center justify-content-center bg-white">
																
                                                                <h5 class="mb0 me1 text-dark">{{ $voiture->plaque_immatriculation }}
                                                                </h5>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-5">
														<span>Statut</span>
													</div>
													<div class="col-7">
														<span class="badge rounded-pill badge-soft text-dark @if ($voiture->statut=='disponible')
                                                            text-bg-success
                                                            @elseif($voiture->statut=='Pas Disponible')
                                                            text-bg-danger
                                                            @endif ">{{ $voiture->statut}}</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Info Card End -->

							
						</div>
						<!-- Left Rows End -->

						<!-- Map Start -->
						<div class="col-xxl-4 mb6">
							<div class="card shadow-card p6">
								<div id="car-map" class="w-100 height-490 rounded"></div>
							</div>
						</div>
						<!-- Map End -->
					</div>
					<!-- Info End -->

					

					<!-- Last Reservations Start -->
					<div class="row mb6">
						<div class="col-12">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb4">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0 d-inline">Last Reservations</h6>
										<div class="dropdown">
											<button type="button" class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
												<i data-feather="more-horizontal" stroke-width="2" height="22" class="text-body"></i>
											</button>
											<ul class="dropdown-menu text-start">
												<li><a class="dropdown-item" href="#">Today</a></li>
												<li><a class="dropdown-item" href="#">Last Week</a></li>
												<li><a class="dropdown-item" href="#">Last Month</a></li>
												<li>
													<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
														Current Year <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="Only data from the beginning of the year to this time are shown."></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="table-responsive text-nowrap">
											<table class="table qd-table mb6 align-middle">
												<thead>
													<tr>
														<th>CUSTOMER</th>
														<th>PICK-UP</th>
														<th>DROP-OFF</th>
														<th>PAYMENT METHOD</th>
														<th>EARNINGS</th>
														<th class="text-end"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><strong class="text-heading">Weir Doe</strong></td>
														<td>
															<strong class="d-block mb1">Apr 9, 2023</strong>
															<small class="d-block">1308 Midway Road</small>
														</td>
														<td>
															<strong class="d-block mb1">Apr 12, 2023</strong>
															<small class="d-block">3532 Ward Road</small>
														</td>
														<td><span class="badge badge-soft rounded-pill text-bg-success">Cash</span></td>
														<td><strong>$35,45</strong></td>
														<td class="text-end">
															<a class="btn btn-primary btn-soft" href="projects-car-rental-reservation-details.html"><i data-feather="arrow-right" stroke-width="2" height="22" class="text-primary"></i></a>
														</td>
													</tr>
													<tr>
														<td><strong class="text-heading">Quiche Hollandaise</strong></td>
														<td>
															<strong class="d-block mb1">Apr 5, 2023</strong>
															<small class="d-block">4876 Emily Renzelli Boulevard</small>
														</td>
														<td>
															<strong class="d-block mb1">Apr 11, 2023</strong>
															<small class="d-block">1607 Braxton Street</small>
														</td>
														<td><span class="badge badge-soft rounded-pill text-bg-info">Credit Card</span></td>
														<td><strong>$26,45</strong></td>
														<td class="text-end">
															<a class="btn btn-primary btn-soft" href="projects-car-rental-reservation-details.html"><i data-feather="arrow-right" stroke-width="2" height="22" class="text-primary"></i></a>
														</td>
													</tr>
													<tr>
														<td><strong class="text-heading">Eric Widget</strong></td>
														<td>
															<strong class="d-block mb1">Apr 4, 2023</strong>
															<small class="d-block">4115 Nancy Street</small>
														</td>
														<td>
															<strong class="d-block mb1">Apr 9, 2023</strong>
															<small class="d-block">4772 Roy Alley</small>
														</td>
														<td><span class="badge badge-soft rounded-pill text-bg-success">Cash</span></td>
														<td><strong>$120,45</strong></td>
														<td class="text-end">
															<a class="btn btn-primary btn-soft" href="projects-car-rental-reservation-details.html"><i data-feather="arrow-right" stroke-width="2" height="22" class="text-primary"></i></a>
														</td>
													</tr>
													<tr>
														<td><strong class="text-heading">Thomas R. Toe</strong></td>
														<td>
															<strong class="d-block mb1">Apr 3, 2023</strong>
															<small class="d-block">4812 Heritage Road</small>
														</td>
														<td>
															<strong class="d-block mb1">Apr 7, 2023</strong>
															<small class="d-block">4366 Copperhead Road</small>
														</td>
														<td><span class="badge badge-soft rounded-pill text-bg-info">Credit Card</span></td>
														<td><strong>$83,12</strong></td>
														<td class="text-end">
															<a class="btn btn-primary btn-soft" href="projects-car-rental-reservation-details.html"><i data-feather="arrow-right" stroke-width="2" height="22" class="text-primary"></i></a>
														</td>
													</tr>
													<tr>
														<td><strong class="text-heading">Samuel Serif</strong></td>
														<td>
															<strong class="d-block mb1">Apr 1, 2023</strong>
															<small class="d-block">4904 Hershell Hollow Road</small>
														</td>
														<td>
															<strong class="d-block mb1">Apr 10, 2023</strong>
															<small class="d-block">673 Burnside Avenue</small>
														</td>
														<td><span class="badge badge-soft rounded-pill text-bg-info">Credit Card</span></td>
														<td><strong>$247,67</strong></td>
														<td class="text-end">
															<a class="btn btn-primary btn-soft" href="projects-car-rental-reservation-details.html"><i data-feather="arrow-right" stroke-width="2" height="22" class="text-primary"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<nav aria-label="Page navigation example">
											<ul class="pagination justify-content-center align-items-center">
												<li class="page-item">
													<a class="page-link">
														<i class="arrow" data-feather="chevron-left" width="14"></i>
													</a>
												</li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item"><a class="page-link" href="#">5</a></li>
												<li class="page-item"><a class="page-link" href="#">6</a></li>
												<li class="page-item">
													<a class="page-link" href="#">
														<i class="arrow" data-feather="chevron-right" width="14"></i>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Last Reservations End -->
				</div>
			</div>
			<!-- ***** Content End ***** -->

			<!-- ***** Footer Start ***** -->
			<footer class="p6 pt5 pb5">
				<div class="container-fluid p0">
					<div class="row">
						<div class="col-sm-6 text-center text-lg-start mb-sm-1">
							<span>2023©</span>
							<span class="text-heading">Qoduby</span>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline m0 text-center text-lg-end">
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Support</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">License</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Documentation</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- ***** End Start ***** -->
		</main>
		<!-- ***** Main End ***** -->
	</div>

	<!-- Plugin Bundle -->
	<script src="assets/js/plugins.bundle.js" crossorigin="anonymous"></script>
	<!-- Common Javascript -->
	<script src="assets/js/app.js" crossorigin="anonymous"></script>
	<!-- Page Specific Javascript -->
	<script src="assets/js/pages/projects/car-rental/car-details.js" crossorigin="anonymous"></script>
</body>
</html>