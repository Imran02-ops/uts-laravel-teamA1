@extends('layouts.main')

@section('title', 'Destinasi Wisata')

@section('content')
<h2 class="text-center fw-bold mb-4">Daftar Destinasi Wisata Populer</h2>

<div class="row">
    @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $post['image'] }}" class="card-img-top" alt="{{ $post['title'] }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text text-muted">{{ $post['location'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<p class="mt-4 fw-bold text-center">
    Total destinasi wisata: {{ count($posts) }}
</p>
@endsection
