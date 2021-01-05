@extends('layouts.master')

@section('content')
@foreach($products->chunk(4) as $chunk)
<div class="row">
    @foreach($chunk as $product)
    <div class="col-sm-3">
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title title">{{ $product->title }}</h5>
              <p class="card-text description">{{ $product->description }}</p>
              <p class="card-text price">{{ $product->price }}</p>
              <a href="{{ route('product.add', ['id' => $product->id]) }}" class="btn btn-success">Add to Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach


@endsection
