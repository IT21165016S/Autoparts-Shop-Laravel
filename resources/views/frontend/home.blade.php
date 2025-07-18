@extends('layouts.app')

@section('content')
    <h2>Fast Moving Products</h2>
    <div class="grid">
        @foreach($products as $product)
            <div class="product-card">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p><strong>${{ $product->price }}</strong></p>
            </div>
        @endforeach
    </div>
@endsection