@extends('layouts.admin')

@section('avant-contenu')
    @include('voitures.ajouter')
@endsection


@section('contenu')
    <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>


            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Liste des vehicules</h1>

                </div>
                <div class="col-md-6 text-start text-md-end">
                    <!-- Add Button Start-->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Ajouter une
                        voiture</button>
                </div>
            </div>
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
                                                    class="badge rounded-pill badge-soft text-dark @if ($voiture->statut == 'disponible') text-bg-success
                                                    @elseif($voiture->statut == 'Pas Disponible')
                                                    text-bg-danger @endif ">{{ $voiture->statut }}</span>
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
                                                            <button class="btn btn-primary btn-soft" data-bs-toggle="modal"
                                                                data-bs-target="#updateCarModal"
                                                                data-car-id="{{ $voiture->id }}">
                                                                Modifier Vehicule
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('admin.voitures.destroy', $voiture) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button"
                                                                    onclick="if(confirm('Etes-vous sur de vouloir supprimer cette voiture?')){this.closest('form').submit()}"
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
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
