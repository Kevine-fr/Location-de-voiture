<!-- Add Marque Modal Start -->
<div class="modal fade" id="addmodelModal" tabindex="-1" aria-labelledby="addmodelModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{ route('modeles.ajouter') }}" id="add-marque-form" novalidate="">
                @csrf
                <div class="modal-header px-4">
                    <h5 class="modal-title fs-5">Ajouter un modele</h5>
                    <button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x" stroke-width="1.5" class="text-body"></i>
                    </button>
                </div>
                <div class="modal-body p6 px-3">
                    <div class="container-fluid">
                        <div class="row mb5">
                            <div class="col-sm-12 mb5">

                                <label for="new-marque" class="form-label">
                                    <span>Marque</span>
                                    <span class="text-danger">*</span>
                                </label>
                                <select name="marque_id" id="add-car-form-3" class="form-select js-choice mt-2"
                                    required="">
                                    <option value="">Choisir une marque </option>
                                    @foreach ($marques as $marque)
                                        <option value="{{ $marque->id }}">{{ $marque->nom }}</option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">Veuillez choisir un modèle.</div>
                            </div>
                            <div class="col-sm-12 mb5">
                                <label for="new-marque" class="form-label">
                                    <span>Nom du Modele</span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="nom" id="new-marque" autocomplete="off" class="form-control" required>
                                <div class="invalid-feedback">Veuillez entrer le nom du modele.</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer le Modele</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Marque Modal End -->
