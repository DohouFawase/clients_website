@extends('layouts.base')
@section('title', 'Commande Details')

@section('content')
<div class="table-responsive">
    <div class="table-header">
        <h3> @yield('title')</h3>
    </div>
    <table class="table table-striped table-bordered text-center ">
        <thead class="table-hover">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Quantité</th>
                <th scope="col"> Prix Unitaire</th>
                <th scope="col"> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
                <tr>
                    <th scope="row"> {{  $detail->id}} </th>
                    <th scope="row"> {{  $detail->quantité}} </th>
                    <th scope="row"> {{  $detail->prix_unit}} </th>
                    <th>

                        <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Delete</button>
                            @include("modal.detail")
                    </th>

                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $details->links() }}
</div>
@endsection