@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <article class="dflex bg-dark min-vh-100">
        @if (isset($movies) && count($movies) > 0)
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card h-100 text-bg-info">
                                <img src="assets/{{ $movie['image'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                                    <p class="card-text">{{ $movie['genre'] }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">{{ $movie['tahun'] }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="container d-flex justify-content-center align-items-center w-50" style="min-height: 100vh;">
                @include("partials.noData")
            </div>
        @endif
    </article>
@endsection

@section('username', $username)
