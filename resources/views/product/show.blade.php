@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Product Details</h1>

            <div class="card">
                <div class="card-header">
                    {{ $product->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Price: ${{ $product->price }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
