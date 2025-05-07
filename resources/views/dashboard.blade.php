@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="container-fluid bg-dark d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="text-center mb-5">
            <h2 class="display-4 text-white">Selamat datang, {{ $username }}!</h2>
            <p class="lead text-white mt-2">Ini adalah halaman dashboard Anda.</p>
        </div>
        <p class="text-center text-white">Moview merupakan sebuah website sederhana yang menampilkan dan mengelola data film
            favorit Anda.</p>
        <div class="card mt-5 col-md-6 bg-black text-center text-white">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>"Life's not about how hard of a hit you can give... It's about how many you can take, and still keep moving forward."</p>
                    <footer class="blockquote-footer">Sylvester Stallone <cite title="Source Title">Rocky</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
@endsection

@section("username", $username)
