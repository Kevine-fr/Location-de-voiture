<!-- Add Marque Modal Start -->
<div class="modal fade" id="addmarqueModal" tabindex="-1" aria-labelledby="addmarqueModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{ route('marques.ajouter') }}" id="add-marque-form" novalidate="">
                @csrf
                <div class="modal-header px-4">
                    <h5 class="modal-title fs-5">Ajouter une marque</h5>
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
                                    <span>Nouvelle Marque</span>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="nom" id="new-marque" class="form-control" required>
                                <div class="invalid-feedback">Veuillez entrer le nom de la nouvelle marque.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer la nouvelle marque</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Marque Modal End -->
