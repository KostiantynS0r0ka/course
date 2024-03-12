@extends('layout')

@section('title', 'List of all customers')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                Name
            </div>
            <div class="col">
                Age
            </div>
            <div class="col">
                Country
            </div>
            <div class="col">
                Link to data
            </div>
        </div>
        @foreach($customerList as $customer)
            @include('components.customerRow', ['customer' => $customer])
        @endforeach
    </div>
@endsection
