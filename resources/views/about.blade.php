@extends('layouts/main')

@section('container')
    <h1>
        Halaman {{ $title }}
    </h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="IMG/{{ $image }}" alt="Imam Wahyu Sobirin" width="200" class="img-thumbnail rounded-circle">
@endsection
