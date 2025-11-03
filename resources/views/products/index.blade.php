@extends('layouts.app')
@section('content')
  <h2>Daftar Produk</h2>
  <div class="row">
    @foreach($products as $product)
      <div class="col-md-4 mb-3">
        <div class="card h-100">
          <div class="card-body">
            <h5>{{ $product->name }}</h5>
            <p>{{ Str::limit($product->description, 50) }}</p>
            <p><strong>Rp{{ number_format($product->price, 2) }}</strong></p>
            <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-primary">Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
