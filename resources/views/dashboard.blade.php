@extends('layouts.admin')

@section('contenu')
<div class="app-content p6 pb2 smp1">
				<div class="container-fluid p0">
					<!-- Chart Row Start -->
					<div class="row">
						<!-- Left Charts Start -->
						<div class="col-xxl-9">
							<!-- Info Chart Cards Start -->
							<div class="row">
								<!-- Net Revenue Start -->
								<div class="col-xl-4 mb5">
									<div class="card shadow-card p5">
										<div class="row align-items-center">
											<div class="col-5">
												<div class="height-60 d-flex align-items-center">
													<canvas class="chart1"></canvas>
												</div>
											</div>
											<div class="col-7">
												<small class="d-block mb1">Net Revenue</small>
												<h4 class="text-heading">$73.000</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="border-top-dashed mt5 mb5"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 text-center border-end-dashed">
												<div class="text-center mb1">
													<span class="text-success">+</span>
													<span class="text-heading">$12.000</span>
												</div>
												<small>Last week</small>
											</div>
											<div class="col-6 text-center">
												<div class="text-center mb1">
													<span class="text-success">+</span>
													<span class="text-heading">12%</span>
												</div>
												<small>Last month</small>
											</div>
										</div>
									</div>
								</div>
								<!-- Net Revenue End -->

								<!-- Sales Start -->
								<div class="col-xl-4 mb5">
									<div class="card shadow-card p5">
										<div class="row align-items-center">
											<div class="col-5">
												<div class="height-60 d-flex align-items-center">
													<canvas class="chart2"></canvas>
												</div>
											</div>
											<div class="col-7">
												<small class="d-block mb1">Sales</small>
												<h4 class="text-heading">$62.000</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="border-top-dashed mt5 mb5"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 text-center border-end-dashed">
												<div class="text-center mb1">
													<span class="text-danger">-</span>
													<span class="text-heading">$3.000</span>
												</div>
												<small>Last week</small>
											</div>
											<div class="col-6 text-center">
												<div class="text-center mb1">
													<span class="text-danger">-</span>
													<span class="text-heading">7%</span>
												</div>
												<small>Last month</small>
											</div>
										</div>
									</div>
								</div>
								<!-- Sales End -->

								<!-- Total Visitor Start -->
								<div class="col-xl-4 mb5">
									<div class="card shadow-card p5">
										<div class="row align-items-center">
											<div class="col-5">
												<div class="height-60 d-flex align-items-center">
													<canvas class="chart3"></canvas>
												</div>
											</div>
											<div class="col-7">
												<small class="d-block mb1">Total Visitor</small>
												<h4 class="text-heading">7.623</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="border-top-dashed mt5 mb5"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 text-center border-end-dashed">
												<div class="text-center mb1">
													<span class="text-success">+</span>
													<span class="text-heading">1278</span>
												</div>
												<small>Last week</small>
											</div>
											<div class="col-6 text-center">
												<div class="text-center mb1">
													<span class="text-success">+</span>
													<span class="text-heading">3%</span>
												</div>
												<small>Last month</small>
											</div>
										</div>
									</div>
								</div>
								<!-- Total Visitor End -->
							</div>
							<!-- Info Chart Cards End -->

							<!-- Area Chart Start -->
							<div class="row mb5">
								<div class="col-12">
									<div class="card shadow-card p5 pb4">
										<div class="row mb4 align-items-center">
											<div class="col">
												<h6 class="mb0">Subscribers</h6>
											</div>
											<div class="col d-flex flex-row justify-content-end">
												<div class="d-flex align-items-center me4">
													<div class="width-10 height-10 bg-primary rounded-circle me1"></div>
													<span>Gained</span>
												</div>
												<div class="d-flex align-items-center">
													<div class="width-10 height-10 bg-info rounded-circle me1"></div>
													<span>Lost</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div id="chart" class="chart4"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Area Chart End -->
						</div>
						<!-- Left Charts End -->

						<!-- Today Tasks Start -->
						<div class="col-xxl-3">
							<div class="card shadow-card p5 mb5">
								<div class="row align-items-center mb4">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0 d-inline">3 tasks today</h6>
										<small><a href="#" class="text-body text-decoration-none hover-primary">VIEW ALL</a></small>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<a href="#" class="rounded border-dashed p4 mb4 d-block text-decoration-none text-body">
											<strong class="text-heading d-block mb4">Developing an idea for admin dashboard & pages</strong>
											<div class="d-flex flex-row align-items-center justify-content-between">
												<span class="badge rounded-pill badge-soft text-bg-success p-e">UI/UX</span>
												<div class="d-flex align-items-center">
													<span class="me3">Justin Cas</span>
													<div class="img-fix rounded-circle width-40 height-40">
														<img src="{{asset('assets/auth/media/avatars/12.jpg')}}" alt="">
													</div>
												</div>
											</div>
										</a>
										<a href="#" class="rounded border-dashed p4 mb4 d-block text-decoration-none text-body">
											<strong class="text-heading d-block mb4">Find React Framework for car website and mobile app</strong>
											<div class="d-flex flex-row align-items-center justify-content-between">
												<span class="badge rounded-pill badge-soft text-bg-info p-e">CODE</span>
												<div class="d-flex align-items-center">
													<span class="me3">Sue Shei</span>
													<div class="img-fix rounded-circle width-40 height-40">
														<img src="{{asset('assets/auth/media/avatars/1.jpg')}}" alt="">
													</div>
												</div>
											</div>
										</a>
										<a href="#" class="rounded border-dashed p4 mb4 d-block text-decoration-none text-body">
											<strong class="text-heading d-block mb4">Redesign header & footer content for client app</strong>
											<div class="d-flex flex-row align-items-center justify-content-between">
												<span class="badge rounded-pill badge-soft text-bg-warning p-e">APP</span>
												<div class="d-flex align-items-center">
													<span class="me3">Barry Tone</span>
													<div class="img-fix rounded-circle width-40 height-40">
														<img src="{{asset('assets/auth/media/avatars/10.jpg')}}" alt="">
													</div>
												</div>
											</div>
										</a>
										<a class="btn btn-info btn-soft d-block mb1" href="#" role="button">All Tasks</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Today Tasks End -->
					</div>
					<!-- Chart Row End -->

					<!-- Progressbar Row Start -->
					<div class="row">
						<!-- Today Work Progress Start -->
						<div class="col-xxl-6 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb4">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0 d-inline">Today work progress</h6>
										<small><a href="#" class="text-body text-decoration-none hover-primary">VIEW ALL</a></small>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="d-flex align-items-center justify-content-between border-bottom-dashed pb4 mb4">
											<div class="d-flex align-items-center pe6">
												<div class="checkbox checkbox-primary me4">
													<input type="checkbox" name="check1" id="check1" checked="">
													<label for="check1"></label>
												</div>
												<div class="d-flex flex-column">
													<strong class="text-heading mb1">Create new component</strong>
													<small>2 days remaining</small>
												</div>
											</div>
											<div class="progress width-200 height-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar" style="width: 60%"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="d-flex align-items-center justify-content-between border-bottom-dashed pb4 mb4">
											<div class="d-flex align-items-center pe6">
												<div class="checkbox checkbox-success me4">
													<input type="checkbox" name="check2" id="check2" checked="">
													<label for="check2"></label>
												</div>
												<div class="d-flex flex-column">
													<strong class="text-heading mb1">Improve workflow in Figma</strong>
													<small>3 days remaining</small>
												</div>
											</div>
											<div class="progress width-200 height-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar bg-success" style="width: 52%"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="d-flex align-items-center justify-content-between border-bottom-dashed pb4 mb4">
											<div class="d-flex align-items-center pe6">
												<div class="checkbox checkbox-danger me4">
													<input type="checkbox" name="check3" id="check3">
													<label for="check3"></label>
												</div>
												<div class="d-flex flex-column">
													<strong class="text-heading mb1">Create dark mode for iOS</strong>
													<small>6 days remaining</small>
												</div>
											</div>
											<div class="progress width-200 height-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar bg-success" style="width: 0%"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="d-flex align-items-center justify-content-between border-bottom-dashed pb4 mb4">
											<div class="d-flex align-items-center pe6">
												<div class="checkbox checkbox-warning me4">
													<input type="checkbox" name="check4" id="check4" checked="">
													<label for="check4"></label>
												</div>
												<div class="d-flex flex-column">
													<strong class="text-heading mb1">Client review & feedback</strong>
													<small>4 days remaining</small>
												</div>
											</div>
											<div class="progress width-200 height-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar bg-warning" style="width: 75%"></div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="d-flex align-items-center justify-content-between border-bottom-dashed pb4">
											<div class="d-flex align-items-center pe6">
												<div class="checkbox checkbox-info me4">
													<input type="checkbox" name="check5" id="check5" checked="">
													<label for="check5"></label>
												</div>
												<div class="d-flex flex-column">
													<strong class="text-heading mb1">Create wireframe for app</strong>
													<small>2 days remaining</small>
												</div>
											</div>
											<div class="progress width-200 height-5" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar bg-info" style="width: 25%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Today Work Progress End -->

						<!-- Today Work Progress Start -->
						<div class="col-xxl-6 mb5">
							<div class="card shadow-card p6 position-relative overflow-hidden">
								<div class="position-absolute w-100 height-150 bg-gradient top-0 start-0"></div>
								<h6 class="text-center position-relative text-white mb5">Monthly Targets</h6>
								<!-- Card 1 Start -->
								<div class="card shadow-card shadow-lg p5 mb4">
									<div class="row mb4">
										<div class="col">
											<h4 class="text-primary">367</h4>
											<span>Sales Month</span>
										</div>
										<div class="col text-end">
											<h4 class="text-heading">186</h4>
											<span>Target Sales</span>
										</div>
									</div>
									<div class="row mb4">
										<div class="col">
											<div class="progress height-8" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar" style="width: 62%"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<span class="text-success">+</span>
											<span class="text-heading">181</span>
										</div>
										<div class="col text-end">
											<span class="text-heading">62%</span>
										</div>
									</div>
								</div>
								<!-- Card 1 End -->

								<!-- Card 2 Start -->
								<div class="card shadow-card shadow-lg p5">
									<div class="row mb4">
										<div class="col">
											<h4 class="text-info">3.463</h4>
											<span>Users Month</span>
										</div>
										<div class="col text-end">
											<h4 class="text-heading">1.638</h4>
											<span>Target Users</span>
										</div>
									</div>
									<div class="row mb5">
										<div class="col">
											<div class="progress height-8" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar bg-info" style="width: 46%"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<span class="text-success">+</span>
											<span class="text-heading">1.825</span>
										</div>
										<div class="col text-end">
											<span class="text-heading">46%</span>
										</div>
									</div>
								</div>
								<!-- Card 2 End -->
							</div>
						</div>
						<!-- Today Work Progress End -->
					</div>
					<!-- Progressbar Row End -->

					<!-- Mini Chart Row Start -->
					<div class="row">
						<!-- Chart 1 Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col">
										<span class="d-block mb1">Sales</span>
										<h4 class="mb4">$6.840</h4>
										<div class="d-flex">
											<i data-feather="trending-up" stroke-width="2" height="20" class="text-success"></i>
											<strong class="text-heading">+8.7%</strong>
										</div>
									</div>
									<div class="col d-flex justify-content-end">
										<div class="height-90 width-90 d-flex align-items-center">
											<div id="chart5" class="chart5"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chart 1 End -->
						
						<!-- Chart 2 Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col">
										<span class="d-block mb1">Earnings</span>
										<h4 class="mb4">$3.876</h4>
										<div class="d-flex">
											<i data-feather="trending-up" stroke-width="2" height="20" class="text-success"></i>
											<strong class="text-heading">+3.1%</strong>
										</div>
									</div>
									<div class="col d-flex justify-content-end">
										<div class="height-90 width-90 d-flex align-items-center">
											<div id="chart6" class="chart6"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chart 2 End -->
						
						<!-- Chart 3 Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col">
										<span class="d-block mb1">Users</span>
										<h4 class="mb4">4.827</h4>
										<div class="d-flex">
											<i data-feather="trending-down" stroke-width="2" height="20" class="text-danger"></i>
											<strong class="text-heading">-3.5%</strong>
										</div>
									</div>
									<div class="col d-flex justify-content-end">
										<div class="height-90 width-90 d-flex align-items-center">
											<div id="chart7" class="chart7"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chart 3 End -->
						
						<!-- Chart 4 Start -->
						<div class="col-xxl-3 col-lg-6 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col">
										<span class="d-block mb1">Visitor</span>
										<h4 class="mb4">7.865</h4>
										<div class="d-flex">
											<i data-feather="trending-up" stroke-width="2" height="20" class="text-success"></i>
											<strong class="text-heading">+2.6%</strong>
										</div>
									</div>
									<div class="col d-flex justify-content-end">
										<div class="height-90 width-90 d-flex align-items-center">
											<div id="chart8" class="chart8"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Chart 4 End -->
					</div>
					<!-- Mini Chart Row End -->

					<!-- Calendar & Table Row Start -->
					<div class="row">
						<!-- Calendar Start -->
						<div class="col-xxl-5 mb5">
							<div class="card shadow-card overflow-hidden">
								<div class="row">
									<div class="col-lg-7 p5 ps6 pb6">
										<h6>Project Time</h6>
										<div class="calendar-container"></div>
									</div>
									<div class="col-lg-5">
										<div class="bg-light h-100 p6 d-flex align-items-center">
											<div class="row">
												<div class="col-12">
													<strong class="text-heading d-block mb5">Detail</strong>
												</div>
												<div class="col-md-12 col-6 d-flex flex-row align-items-center mb4">
													<div class="width-4 height-40 bg-warning rounded me3"></div>
													<div class="d-flex flex-column">
														<span class="text-heading d-block mb0">Development</span>
														<small>4 tasks</small>
													</div>
												</div>
												<div class="col-md-12 col-6 d-flex flex-row align-items-center mb4">
													<div class="width-4 height-40 bg-primary rounded me3"></div>
													<div class="d-flex flex-column">
														<span class="text-heading d-block mb0">UI Design</span>
														<small>2 tasks</small>
													</div>
												</div>
												<div class="col-md-12 col-6 d-flex flex-row align-items-center mb4">
													<div class="width-4 height-40 bg-success rounded me3"></div>
													<div class="d-flex flex-column">
														<span class="text-heading d-block mb0">SEO</span>
														<small>7 tasks</small>
													</div>
												</div>
												<div class="col-md-12 col-6 d-flex flex-row align-items-center mb4">
													<div class="width-4 height-40 bg-info rounded me3"></div>
													<div class="d-flex flex-column">
														<span class="text-heading d-block mb0">Code Review</span>
														<small>4 tasks</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Calendar End -->

						<!-- Table Start -->
						<div class="col-xxl-7 mb5">
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0 d-inline">Inventory</h6>
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
											<table class="table qd-table mb0">
												<thead>
													<tr>
														<th scope="col">ITEM</th>
														<th scope="col">PRODUCT ID</th>
														<th scope="col">CATEGORY</th>
														<th scope="col">PRICE</th>
														<th scope="col">STATUS</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row"><strong class="text-heading">Smart Phone</strong></th>
														<td>4827</td>
														<td>Phone</td>
														<td>$1.200</td>
														<td><span class="badge badge-soft rounded-pill text-bg-success">In Stock</span></td>
													</tr>
													<tr>
														<th scope="row"><strong class="text-heading">Smart Vacuum</strong></th>
														<td>387</td>
														<td>Smart Home</td>
														<td>$400</td>
														<td><span class="badge badge-soft rounded-pill text-bg-danger">Out Stock</span></td>
													</tr>
													<tr>
														<th scope="row"><strong class="text-heading">Black Laptop</strong></th>
														<td>1187</td>
														<td>Computer</td>
														<td>$1.750</td>
														<td><span class="badge badge-soft rounded-pill text-bg-warning">Low Stock</span></td>
													</tr>
													<tr>
														<th scope="row"><strong class="text-heading">7” Tablet</strong></th>
														<td>784</td>
														<td>Phone</td>
														<td>$650</td>
														<td><span class="badge badge-soft rounded-pill text-bg-warning">Low Stock</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Table End -->
					</div>
					<!-- Calendar & Table Row End -->
				</div>
			</div>
@endsection