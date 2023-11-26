@extends('layouts.admin')

@section('contenu')

<div class="app-content p6 pb2 smp1">
	<div class="container p0">
		<!-- Page Top Start -->
		<div class="row mb6 align-items-center">
			<div class="col-md-6 mobile-bottom-fix">
				<h1 class="page-title mb2">Volkswagen - Golf TSI 2017</h1>
				<nav class="breadcrumb-nav" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Accueil</a></li>
						<li class="breadcrumb-item"><a href="#">Détails de la voiture</a></li>
						<li class="breadcrumb-item active" aria-current="page">Volkswagen - Golf TSI 2017</li>
					</ol>
				</nav>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<!-- Add Button Start-->
				<button class="btn btn-primary btn-soft" data-bs-toggle="modal" data-bs-target="#addCarModal">Modifier une voiture</button>
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
										<img src="assets/media/cars/5.jpeg" alt="">
									</div>
								</div>
								<div class="col-md-5">
									<div class="row mb6">
										<div class="col-5">
											<span>Marque</span>
										</div>
										<div class="col-7">
											<strong class="text-heading">Volkswagen</strong>
										</div>
									</div>
									<div class="row mb6">
										<div class="col-5">
											<span>Modele</span>
										</div>
										<div class="col-7">
											<strong class="text-heading">Golf TSI 2017</strong>
										</div>
									</div>
									<div class="row mb6">
										<div class="col-5">
											<span>Année</span>
										</div>
										<div class="col-7">
											<strong class="text-heading">2017</strong>
										</div>
									</div>
									<div class="row mb6">
										<div class="col-5">
											<span>Plaque d'immatriculation</span>
										</div>
										<div class="col-7">
											<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
												<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">D</div>
												<div class="w-100 d-flex align-items-center justify-content-center bg-white">
													<h6 class="mb0 text-dark">KA PA 777</h6>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-5">
											<span>Status</span>
										</div>
										<div class="col-7">
											<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
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

		
	</div>
</div>
	
@endsection