@extends('layouts.base')

@section('title', 'Tableau de bord')

@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                            <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total de Stock</span>
                <h3 class="card-title mb-0">{{$nombreStock}}</h3>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                            <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Catégorie Stockée</span>
                <h3 class="card-title mb-0">{{$totalCategorie}}</h3>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                            <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Revenu</span>
                <h3 class="card-title mb-0">{{$totalRevenue}}</h3>
            </div>
        </div>
    </div>
</div>



video

@endsection
