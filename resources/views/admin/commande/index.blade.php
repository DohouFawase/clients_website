@extends('layouts.base')
@section('title', 'Table Commande')

@section("content")
<div class="table-responsive">
    <div class="table-header">
        <h3> @yield('title')</h3>
    </div>
    <table class="table table-striped table-bordered text-center ">
        <thead class="table-hover">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Adress de livraison</th>
                <th scope="col"> Status</th>
                <th scope="col"> Date d'Exporation</th>
                <th scope="col"> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $commande)
                <tr>
                    <th scope="row"> {{ $commande->id}} </th>
                    <th scope="row"> {{Str::limit($commande->adr_livr,40,"...")}}</th>
                    <th scope="row"> {{ $commande->statut}} </th>
                    <th scope="row"> {{ $commande->date_cmd}} </th>
                   
                    <th> 
                        <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Delete</button>
                        @include('modal.commande')

                    </th>

                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $commandes->links() }}
</div>
@endsection