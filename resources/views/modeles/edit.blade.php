@extends('layouts.admin')

@section('avant-contenu')
    @include('marques.ajouter')

@endsection


@section('contenu')
    <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Modifier  marques</h1>

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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmarqueModal">Ajouter une
                        marque</button>
                    <!-- Add Button End-->
                </div>
            </div>
            <!-- Page Top End -->

            <!-- Mini Widgets Start -->

            <!-- Mini Widgets End -->

            <!-- Content Start -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" action="" id="add-marque-form" novalidate="">
                        @csrf
                        @method('PUT')
                        <div class="modal-header px-4">
                            <h5 class="modal-title fs-5">Modifier un modele</h5>
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
                                            <span>nom du model</span>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="modele" id="modele" class="form-control" value="{{ $modele->nom}}" >                                        <label for="new-marque" class="form-label">
                                            <span>Marque</span>
                                            <span class="text-danger">*</span>
                                        </label>
                                        {{-- <select name="marque_id" id="marque_id" class="form-select">
                                            @foreach($marques as $marque)
                                                <option value="{{ $marque->id }}" {{ $marque->id == $modele->marque_id ? 'selected' : '' }}>
                                                    {{ $marque->nom }}
                                                </option>
                                            @endforeach
                                        </select> --}}
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
            <!-- Content End -->
        </div>
    </div>
@endsection
