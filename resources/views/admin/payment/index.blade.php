@extends('layouts.base')

@section('title', 'Table Payment')

@section('content')
   
    <div class="table-responsive">
        <div class="table-header">
            <h3> @yield('title')</h3>
        </div>
        <table class="table table-striped table-bordered text-center ">
            <thead class="table-hover">
                <tr>
                    <th scope="col"> ID</th>
                    <th scope="col"> Numero de Carte</th>
                    <th scope="col"> Type de Carte</th>
                    <th scope="col"> Date d'Exporation</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <th scope="row"> {{ $payment->id}} </th>
                        <th > {{ $payment->num_cart}} </th>
                        <th > {{ $payment->type_carte}} </th>
                        <th > {{ $payment->date_exp}} </th>
                        <th> 

                            <button class="btn btn-danger" type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#basicModal">Delete</button>
                                @include('modal.payment')
                        </th>

                    </tr>
                @endforeach
            </tbody>

        </table>

        {{ $payments->links() }}
    </div>
@endsection