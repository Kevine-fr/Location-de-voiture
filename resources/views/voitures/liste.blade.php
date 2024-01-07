@extends('layouts.admin')

@section('avant-contenu')
    @include('voitures.ajouter')
 
@endsection


@section('contenu')
    <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Liste des voitures</h1>

                </div>
                <div class="col-md-6 text-start text-md-end">
                    <!-- Filter Dropdown Start-->
                    <div class="dropdown d-inline me4">
                        <button class="btn bg-white d-inline-flex align-items-center dropdown-toggle"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
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
                                        <label for="form-element-3" class="form-label d-block">L'utilisation du
                                            statut:</label>
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
                                        <button class="btn btn-sm d-block w-100 btn-secondary btn-soft"
                                            role="button">Réinitialisation</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-sm d-block w-100 btn-primary"
                                            role="button">Appliquer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter Dropdown End-->

                    <!-- Add Button Start-->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Ajouter une
                        voiture</button>
                    <!-- Add Button End-->
                </div>
            </div>
            <!-- Page Top End -->

            <!-- Mini Widgets Start -->
            
            <!-- Mini Widgets End -->

            <!-- Content Start -->
            <div class="row mb5">
                <div class="col-12">
                    <div class="card shadow-card p6 pt3">
                        <div class="table-responsive text-nowrap">
                            <table class="table qd-table mb6 align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">MARQUE</th>
                                        <th scope="col">MODELE</th>
                                        <th scope="col">ANNEE</th>
                                        <th scope="col">PLAQUE D'IMMATRICULATION</th>
                                        <th scope="col">STATUT</th>
                                        <th scope="col" class="text-end">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($voitures as $voiture)
                                        <tr>

                                            <td>
                                                <div class="d-inline-flex flex-row align-items-center">
                                                    <div class=" img-fluid rounded me4">
                                                        <img src="{{ $voiture->image }}" alt="{{ $voiture->image }}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <strong>{{ $voiture->marque->nom }}</strong>  
                                            </td>
                                            <td>
                                                <strong class="text-heading">{{ $voiture->modele->nom }}</strong>
                                            </td>
                                            <td>
                                                <strong class="text-heading">{{ $voiture->annee }}</strong>
                                            </td>
                                            <td>
                                                <div class="border border-dark width-160 rounded overflow-hidden d-flex bg-white"
                                                    dir="ltr">
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-center border-end border-dark">
                                                        <h5 class="mb0 me1 text-dark">{{ $voiture->plaque_immatriculation }}
                                                        </h5>
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge rounded-pill badge-soft text-dark @if ($voiture->statut=='disponible')
                                                    text-bg-success
                                                    @elseif($voiture->statut=='Pas Disponible')
                                                    text-bg-danger
                                                    @endif ">{{ $voiture->statut}}</span>
                                            </td>
                                            <td class="">
                                                <div class="dropdown text-end">
                                                    <button type="button"
                                                        class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75 mr-2 me-2"
                                                        data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span class="text-heading">Actions</span>
                                                        <i data-feather="chevron-down" stroke-width="2" height="16"
                                                            class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start ml-2">
                                                        <li>
                                                            {{-- <a class="dropdown-item" href="{{route('admin.voitures.modifier', $voiture)}}">Modifier</a> --}}
                                                            <button class="btn btn-primary btn-soft" data-bs-toggle="modal" data-bs-target="#addCarModal">Modifier Vehicule</button>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('admin.voitures.destroy', $voiture) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" onclick="if(confirm('Etes-vous sur de vouloir supprimer cette voiture?')){this.closest('form').submit()}"
                                                                    class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Supprimer <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </button>
                                                            </form>

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
                                <!--</li>
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
                                </li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>
    </div>
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
@endsection
