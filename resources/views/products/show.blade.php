@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <h1>Detail Produk</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    </div>
    
    <div class="mt-3">
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection