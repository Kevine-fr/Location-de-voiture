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
							<h1 class="page-title mb2">Liste des votures</h1>
							
						</div>
						<div class="col-md-6 text-start text-md-end">
							<!-- Filter Dropdown Start-->
							<div class="dropdown d-inline me4">
								<button class="btn bg-white d-inline-flex align-items-center dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<i data-feather="filter" stroke-width="1.5" height="16" class="me2 text-body"></i>
									<span class="text-body">Filtre</span>
								</button>
								<div class="dropdown-menu width-300 p0">
									<div class="border-bottom-dashed">
										<h6 class="mb0 p4 px-4">Filtre Options</h6>
									</div>
									<div class="p5 px-4">
										<div class="row mb5">
											<div class="col-12 mb4">
												<label for="form-element-1" class="form-label">STATUT:</label>
												<select id="form-element-1" class="form-select js-choice">
													<option value="">Option Selectionner</option>
													<option value="1">PUBLIEE</option>
													<option value="2">INACTIVE</option>
													<option value="3">PROGRAMMEE</option>
												</select>
											</div>
											<div class="col-12 mb4">
												<label for="form-element-2" class="form-label">ANNEE:</label>
												<input type="text" class="form-control" id="form-element-2" placeholder="2023">
											</div>
											<div class="col-12">
												<label for="form-element-3" class="form-label d-block">L'utilisation du statut:</label>
												<div class="checkbox checkbox-primary me4">
													<input type="checkbox" name="check1" id="check1" checked="">
													<label for="check1">En cours d'utilisation</label>
												</div>
												<div class="checkbox checkbox-primary me4">
													<input type="checkbox" name="check2" id="check2">
													<label for="check2">Dans le garage</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6">
												<button class="btn btn-sm d-block w-100 btn-secondary btn-soft" role="button">Réinitialisation</button>
											</div>
											<div class="col-6">
												<button class="btn btn-sm d-block w-100 btn-primary" role="button">Appliquer</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Filter Dropdown End-->

							<!-- Add Button Start-->
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Ajouter une voiture</button>
							<!-- Add Button End-->
						</div>
					</div>
					<!-- Page Top End -->

					<!-- Mini Widgets Start -->
					<div class="row mb2">
						<!-- Widget 1 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-primary rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Voiture totale</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">{{count($voitures->where('statut_id',2))}}</h1>
								<span>Vehicules disponibles a la location</span>
							</div>
						</div>
						<!-- Widget 1 End -->
						
						<!-- Widget 2 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-info rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Reservation</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">{{count($voitures->where('statut_id',3))}}</h1>
								<span>Nouvelles reservations entrantes</span>
							</div>
						</div>
						<!-- Widget 2 End -->
						
						<!-- Widget 3 Start -->
						<div class="col-xxl-4 mb5">
							<div class="bg-success rounded-3 pt2 pb5 text-center">
								<h6 class="text-white mb0">Vehicule Defectueux</h6>
							</div>
							<div class="card shadow-card p5 text-center mtn4">
								<h1 class="mb1">{{count($voitures->where('statut_id',1))}}</h1>
								<span>Vehicules en maintenance</span>
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
												<th scope="col">MARQUE</th>
												<th scope="col">MODELE</th>
												<th scope="col">ANNEE</th>
												<th scope="col">PLAQUE D'IMMATRICULATION</th>
												<th scope="col">STATUT</th>
												<th scope="col" class="text-end">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
										@foreach($voitures as $v)	
											<tr>
												<td>
													<div class="d-inline-flex flex-row align-items-center">
														<div class="width-120 height-80 img-fix rounded me4">
														 <img src="{{$v->image}}" alt="{{$v->image}}"> 
														</div>
														<strong>{{$v->marque->nom}}</strong>
													</div>
												</td>
												<td>
													<strong class="text-heading">{{$v->modele->nom}}</strong>
												</td>
												<td>
													<strong class="text-heading">{{$v->annee}}</strong>
												</td>
												<td>
													<div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white" dir="ltr">
														<div class="w-100 d-flex align-items-center justify-content-center border-end border-dark">
															<h5 class="mb0 me1 text-dark">{{$v->plaque_immatriculation}}</h5>
														</div>
					
													</div>
												</td>
												<td>
													<span class="badge rounded-pill badge-soft text-bg-{{$v->statut->couleur}}">{{$v->statut->nom}}</span>
												</td>
												<td>
													<div class="dropdown text-end">
														<button type="button" class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
															<span class="text-heading">Actions</span>
															<i data-feather="chevron-down" stroke-width="2" height="16" class="text-heading"></i>
														</button>
														<ul class="dropdown-menu text-start">
															<li><a class="dropdown-item" href="">Modifier</a></li>							
															<li>
																<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
																Supprimer <i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
																</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
										@endforeach
											
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