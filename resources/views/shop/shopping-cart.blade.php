@extends('layouts.master')

@section('content')
    @if(Session::has('cart'))
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <span class="badge bg-secondary">{{ $product['quantity'] }}</span>
                        <strong>{{ $product['item']['title'] }}</strong>
                        <span class="label label-success">${{ $product['price'] }}</span>
                    </li>
                @endforeach
                    <li class="list-group-item">Shipping: ${{ $shipping }}</li>
                    <li class="list-group-item">Total: ${{ $totalPrice }}</li>
            </ul>
        </div>
    </div>
    @else
    @endif
@endsection
