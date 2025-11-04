@extends('layouts.main')

@section('title', 'About')

@section('content')
<div class="text-center mb-5">
    <h2 class="fw-bold">Tentang Penulis</h2>
    <p>Website ini dibuat sebagai tugas Laravel dengan sistem kolaborasi GitHub.</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-4 text-center">
        <div class="card p-3">
          <img src="{{ asset('img/cappadocia') }}" 
     class="rounded-circle mx-auto mb-3"
     width="150" height="150" 
     alt="Profile">
            <h5 class="fw-bold">{{ $name }}</h5>
            <p class="text-muted">NIM: {{ $nim }}</p>
            <p>{{ $bio }}</p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-4 text-center">
        <div class="card p-3">
            <img src="{{ asset('img/newyork.jpg') }}" 
     class="rounded-circle mx-auto mb-3"
     width="150" height="150" 
     alt="Profile">
            <h5 class="fw-bold">{{ $name }}</h5>
            <p class="text-muted">NIM: {{ $nim }}</p>
            <p>{{ $bio }}</p>
        </div>
    </div>
</div>
@endsection
