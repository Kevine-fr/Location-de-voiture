@extends('layouts.admin')

@section('avant-contenu')
@include('voitures.ajouter')
@include('voitures.modifier')
@endsection


@section('contenu')
<div class="app-content p6 pb2 smp1">
				<div class="container p0">
					<!-- Page Top Start -->
					<div class="row mb6 align-items-center">
						<div class="col-md-6 mobile-bottom-fix">
							<h1 class="page-title mb2">Car List</h1>
							<nav class="breadcrumb-nav" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Car List</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 text-start text-md-end">
							<!-- Filter Dropdown Start-->
							<div class="dropdown d-inline me4">
								<button class="btn bg-white d-inline-flex align-items-center dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<i data-feather="filter" stroke-width="1.5" height="16" class="me2 text-body"></i>
									<span class="text-body">Filter</span>
								</button>
								<div class="dropdown-menu width-300 p0">
									<div class="border-bottom-dashed">
										<h6 class="mb0 p4 px-4">Filter Options</h6>
									</div>
									<div class="p5 px-4">
										<div class="row mb5">
											<div class="col-12 mb4">
												<label for="form-element-1" class="form-label">Status:</label>
												<select id="form-element-1" class="form-select js-choice">
													<option value="">Select option</option>
													<option value="1">Published</option>
													<option value="2">Inactive</option>
													<option value="3">Scheduled</option>
												</select>
											</div>
											<div class="col-12 mb4">
												<label for="form-element-2" class="form-label">Year:</label>
												<input type="text" class="form-control" id="form-element-2" placeholder="2023">
											</div>
											<div class="col-12">
												<label for="form-element-3" class="form-label d-block">Using Status:</label>
												<div class="checkbox checkbox-primary me4">
													<input type="checkbox" name="check1" id="check1" checked="">
													<label for="check1">In Use</label>
												</div>
												<div class="checkbox checkbox-primary me4">
													<input type="checkbox" name="check2" id="check2">
													<label for="check2">In the Garage</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<button class="btn btn-sm d-block w-100 btn-secondary btn-soft" role="button">Reset</button>
											</div>
											<div class="col-6">
												<button class="btn btn-sm d-block w-100 btn-primary" role="button">Apply</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Filter Dropdown End-->

							<!-- Add Button Start-->
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Add Car</button>
							<!-- Add Button End-->
						</div>
					</div>
					<!-- Page Top End -->

					<!-- Mini Widgets Start -->
					<div class="row mb2">
						<!-- Widget 1 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-primary rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Total Car</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">48</h1>
								<span>Vehicles available for rental</span>
							</div>
						</div>
						<!-- Widget 1 End -->
						
						<!-- Widget 2 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-info rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Reservation</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">16</h1>
								<span>New incoming reservations</span>
							</div>
						</div>
						<!-- Widget 2 End -->
						
						<!-- Widget 3 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-success rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Faulty Vehicle</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">7</h1>
								<span>Vehicles in maintenance</span>
							</div>
						</div>
						<!-- Widget 3 End -->
					</div>
					<!-- Mini Widgets End -->

					<!-- Content Start -->
					<div class="row mb5">
						<div class="col-12">
							<div class="card shadow-card p6 pt3">
								<div class="table-responsive text-nowrap">
									<table class="table qd-table mb6 align-middle">
										<thead>
											<tr>
												<th scope="col">BRAND</th>
												<th scope="col">MODEL</th>
												<th scope="col">YEAR</th>
												<th scope="col">LICENSE PLATE</th>
												<th scope="col">STATUS</th>
												<th scope="col" class="text-end">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/1.jpg" alt="">
														</div>
														<strong>Volkswagen</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Golf TSI 2017</strong>
												</td>
												<td>
													<strong class="text-heading">2017</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">D</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-white">
															<h6 class="mb0 text-dark">KA PA 777</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="{{ route('admin.voitures.details', ['id' => 1]) }}">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/2.jpg" alt="">
														</div>
														<strong>Mercedes</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">AMG GT 2019</strong>
												</td>
												<td>
													<strong class="text-heading">2019</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">F</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-warning">
															<h6 class="mb0 text-dark">936 ANX 35</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-danger">Inactive</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/3.jpg" alt="">
														</div>
														<strong>Toyota</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">4Runner 2018</strong>
												</td>
												<td>
													<strong class="text-heading">2018</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">B</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-white">
															<h6 class="mb0 text-danger">1-ABC-003</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/4.jpg" alt="">
														</div>
														<strong>Nissan</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Altima 2020</strong>
												</td>
												<td>
													<strong class="text-heading">2020</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">TR</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-white">
															<h6 class="mb0 text-dark">48 ACV 103</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/1.jpg" alt="">
														</div>
														<strong>Subaru</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Outback 2019</strong>
												</td>
												<td>
													<strong class="text-heading">2019</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white" dir="ltr">
														<div class="width-40 height-30 d-flex flex-column align-items-center justify-content-center text-white pt1">
															<div class="width-10 height-10 bg-primary-subtle"></div>
															<small class="text-primary">IND</small>
														</div>
														<div class="w-100 d-flex align-items-center justify-content-center">
															<h6 class="mb0 text-dark">TN 06 0 0000</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/2.jpg" alt="">
														</div>
														<strong>Volkswagen</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Golf TSI 2017</strong>
												</td>
												<td>
													<strong class="text-heading">2017</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex flex-column" dir="ltr">
														<div class="bg-primary text-white text-center">
															<small>BRASIL</small>
														</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-white">
															<h6 class="mb0 text-dark">BCA9G35</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-info">Scheduled</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/3.jpg" alt="">
														</div>
														<strong>Mercedes</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">AMG GT 2019</strong>
												</td>
												<td>
													<strong class="text-heading">2019</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex bg-warning" dir="ltr">
														<div class="width-40 height-30 d-flex align-items-center justify-content-center">
															<small class="text-dark">UK</small>
														</div>
														<div class="border border-dark rounded w-100 d-flex align-items-center justify-content-center m1">
															<h6 class="mb0 text-dark">BD51 SMR</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-danger">Inactive</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/4.jpg" alt="">
														</div>
														<strong>Toyota</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">4Runner 2018</strong>
												</td>
												<td>
													<strong class="text-heading">2018</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex flex-column bg-white" dir="ltr">
														<div class="text-heading text-center">
															<small class="text-dark">COUNTRY</small>
														</div>
														<div class="w-100 d-flex align-items-center justify-content-center">
															<h6 class="mb0 text-dark">346 MKK</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-info">Scheduled</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/1.jpg" alt="">
														</div>
														<strong>Nissan</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Altima 2020</strong>
												</td>
												<td>
													<strong class="text-heading">2020</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white" dir="ltr">
														<div class="w-100 d-flex align-items-center justify-content-center border-end border-dark">
															<strong class="text-dark me1">A</strong>
															<h5 class="mb0 me1 text-dark">0000</h5>
															<strong class="text-dark">AA</strong>
														</div>
														<div class="width-40 height-40 d-flex flex-column align-items-center justify-content-center text-white pt1">
															<h6 class="mb0 text-dark">78</h6>
															<small class="text-dark">RUS</small>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/2.jpg" alt="">
														</div>
														<strong>Subaru</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">Outback 2019</strong>
												</td>
												<td>
													<strong class="text-heading">2019</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="w-100 height-30 d-flex align-items-center justify-content-center bg-primary">
															<h6 class="mb0 text-white">K  P8922</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
															<img src="assets/media/cars/3.jpg" alt="">
														</div>
														<strong>Mercedes</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">AMG GT 2019</strong>
												</td>
												<td>
													<strong class="text-heading">2019</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
														<div class="bg-danger width-40 height-30 d-flex align-items-center justify-content-center text-white">15</div>
														<div class="w-100 d-flex align-items-center justify-content-center bg-white">
															<h6 class="mb0 text-dark">90126</h6>
														</div>
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="#">Edit</a></li>
															<li><a class="dropdown-item" href="#">Details</a></li>
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																	Delete <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
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
					<!-- Content End -->
				</div>
			</div>

@endsection