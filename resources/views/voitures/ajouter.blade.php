<!-- Add Modal Start -->
<div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form enctype="multipart/form-data" method="post" action="{{ route('admin.voitures.enregistrer')}}" id="add" class="" novalidate="">
					@csrf
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
										<div class="width-120 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center">
											<i data-feather="image" stroke-width="1.5" class="text-body"></i>
											<div class="img-fix width-120 height-120 position-absolute top-0 start-0">
												<img id="preview-img" class="">
											</div>
										</div>
										<div class="d-flex flex-grow-1 align-items-center justify-content-center">
											<div class="d-flex flex-column justify-content-start align-items-center">
												<strong class="d-block mb2">Glisser-déposer</strong>
												<span class="d-block mb2">OU</span>
												<label for="fileElem" id="fileSelect" class="d-block mb3 text-primary">Parcourir la photo</label>
												<small>Supports: *.png, *.jpg and *.jpeg</small>
											</div>
										</div>
										<input type="file" name="image" id="fileElem" accept="image/*" class="d-none" required>
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
									<select name="marque_id" id="add-car-form-2" class="form-select js-choice" required="">
										<option value="">Choisir la marque</option>
										@foreach($marques as $marque)
										<option value="{{$marque->id}}">{{$marque->nom}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">Veuillez sélectionner une marque.</div>
								</div>
								<div class="col-sm-6 mb5">
									<label for="add-car-form-3" class="form-label">
										<span>Modèle</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="After choosing a brand, choose a model."></i>
									</label>
									<select name="modele_id" id="add-car-form-3" class="form-select js-choice" required="">
										<option value="">Choisir le modele</option>
										@foreach($modeles as $modele)
										<option value="{{$modele->id}}">{{$modele->nom}}</option>
										@endforeach
										
									</select>
									<div class="invalid-feedback">Veuillez sélectionner un modèle.</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 mb5">
									<label for="add-car-form-4" class="form-label">
										<span>Année</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Select the traffic license date of the car."></i>
									</label>
									<input type = "number" name= "annee" id="add-car-form-4" class="form-input" required>
										
									<div class="invalid-feedback">Veuillez sélectionner une année.</div>

								</div>
								<div class="col-sm-6 mb5">
									<label for="add-car-form-5" class="form-label">
										<span>Status</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Select the status of the car being published on the site."></i>
									</label>
									<select name= "statut_id" id="add-car-form-5" class="form-select js-choice" required="">
										<option value="">Sélectionner le statut</option>
										@foreach($statuts as $statut)
										<option value="{{$statut->id}}">{{$statut->nom}}</option>
										@endforeach
										
									</select>
									<div class="invalid-feedback">Veuillez sélectionner un statut.</div>
								</div>
							</div>
							<div class="row">
									<label for="add-car-form-7" class="form-label">
										<span>plaque immatriculation</span>
										<span class="text-danger">*</span>
										<i data-feather="info" stroke-width="2" height="12" class="text-body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="qd-tooltip" data-bs-title="Write down the license plate of the vehicle."></i>
									</label>
									<input name = "plaque_immatriculation" id="add-car-form-7" class="form-control" type="text" required="">
									<div class="invalid-feedback">Veuillez remplir tous les champs.</div>
							</div>
							<div class="row">
								<div class="col-lg-4 mb5">
									<div class="checkbox checkbox-primary me4">
										<input type="checkbox" name="check1" id="add-car-form-8" checked="">
										<label for="add-car-form-8">Y a-t-il un siège auto pour enfant ? </label>
									</div>
								</div>
								<div class="col-lg-4 mb5">
									<div class="checkbox checkbox-primary me4">
										<input type="checkbox" name="check1" id="add-car-form-9">
										<label for="add-car-form-9">Peut-il être loué mensuellement ?</label>
									</div>
								</div>
								<div class="col-lg-4 mb5">
									<div class="checkbox checkbox-primary me4">
										<input type="checkbox" name="check1" id="add-car-form-10">
										<label for="add-car-form-10">Il s'agit d'un autre lieu ?</label>
									</div>
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
