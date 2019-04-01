@extends('layout')

@section('content')

    <h1> 😉 Sites detail</h1>
    {{-- <span><strong>URL:</strong> {{ $site->url }}</span> --}}
    <h3>{{ $site->detail }}</h3>
    <p>
        <a href="/sites">back</a>
    </p>

@endsection