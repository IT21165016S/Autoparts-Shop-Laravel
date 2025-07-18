@extends('layouts.admin.app')
@section('content')
    <h2>Admin Products</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} - ${{ $product->price }}
                <a href="{{ route('products.edit', $product) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection