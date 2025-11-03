@extends('layouts.app')
@section('content')
  <h2>{{ $product->name }}</h2>
  <p>{{ $product->description }}</p>
  <p><strong>Harga: Rp{{ number_format($product->price, 2) }}</strong></p>
  <a href="{{ route('products') }}" class="btn btn-secondary">Kembali</a>
@endsection
