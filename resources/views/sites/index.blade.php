@extends('layout')

@section('content')
    <h1> 😉 Sites available</h1>
    
    @if ($sites->count())
    <h2>Click on the site to get its detail</h2>
        <ul>
            @foreach ($sites as $site)
                <li>
                    <a href="/sites/{{ $site->id }}">{{ $site->url }}</a>
                </li>
            @endforeach
        </ul>
    @endif

@endsection