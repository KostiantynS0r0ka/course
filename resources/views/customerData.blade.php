@extends('layout')

@section('title', 'List of customer\'s data')

@section('content')
    <div class="container text-center">
        <div class="row mt-3 mb-3">
            <div class="col">
                Customer Name
            </div>
            <div class="col">
                data
            </div>
        </div>
        @foreach($customerData as $data)
            @include('components.customerDataRow', ['data' => $data, 'customer' => $customer])
        @endforeach
    </div>
@endsection
