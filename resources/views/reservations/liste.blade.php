@extends('layouts.admin')

@section('contenu')
    <div class="app-content p6 pb2 smp1">
        <div class="container p0">
            <!-- Page Top Start -->
            <div class="row mb6 align-items-center">
                <div class="col-md-6 mobile-bottom-fix">
                    <h1 class="page-title mb2">Liste des réservations</h1>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <!-- Filter Dropdown Start-->
                    <!-- Filter Dropdown End-->
                </div>
            </div>
            <!-- Page Top End -->

            <!-- Content Start -->
            <div class="row mb5">
                <div class="col-12">
                    <div class="card shadow-card p6 pt3">
                        <div class="table-responsive text-nowrap">
                            <table class="table qd-table mb6 align-middle">
                                <thead>
                                    <tr class="text-dark">
                                        <th scope="col">ID</th>
                                        <th scope="col">MODELE</th>
                                        <th scope="col">MARQUE</th>
                                        <th scope="col">DATE DEBUT</th>
                                        <th scope="col">DATE FIN</th>
                                        <th scope="col">NOM CLIENT</th>
                                        <th scope="col">EMAIL CLIENT</th>
                                        <th scope="col">MONTANT</th>
                                        <!-- <th scope="col">MODE PAIEMENT</th> -->
                                        <th scope="col" class="text-center px-3">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                    <tr class="text-secondary">
                                        <td scope="col" class="text-danger">{{ $reservation->id }}</td>
                                        <td scope="col" class="text-warning">{{ $reservation->modele }}</td>
                                        <td scope="col" class="text-primary">{{ $reservation->marque }}</td>
                                        <td scope="col">{{ $reservation->dateDebut }}</td>
                                        <td scope="col">{{ $reservation->dateFin }}</td>
                                        <td scope="col">{{ $reservation->name }}</td>
                                        <td scope="col">{{ $reservation->email }}</td>
                                        <td scope="col" class="text-success">{{ $reservation->prix }} ₣</td>
                                        <!-- <td scope="col">{{ $reservation->mode_paiement }}</td> -->
                                        <td scope="col" class="text-center">
                                            <button class="text-white rounded btn btn-info ">ACTIONS</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>
    </div>
@endsection
