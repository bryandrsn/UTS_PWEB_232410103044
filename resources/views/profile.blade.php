@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container-fluid d-flex bg-dark">
        <div class="container bg-black rounded-4 d-flex flex-column justify-content-center align-items-center my-5 p-5"
            style="max-width: 576px">
            <div class="text-center mt-2">
                <h2 class="mb-4 display-6 text-center text-white">Hai, {{ $username }}!</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="white"
                    class="bi bi-person-fill border border-info rounded-5 my-3" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
            </div>
            <div class="container text-white mt-5">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" style="width: 35%">Username</span>
                    <input type="text" class="form-control" value="{{ $username }}" disabled>
                </div>
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" style="width: 35%">Nama</span>
                    <input type="text" class="form-control" value="{{ $name }}" disabled>
                </div>
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" style="width: 35%">Email</span>
                    <input type="text" class="form-control" value="{{ $email }}" disabled>
                </div>
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text" style="width: 35%">Genre Favorite</span>
                    <input type="text" class="form-control" value="{{ $favGenre }}" disabled>
                </div>
            </div>
            <a class="btn btn-danger" href="/">Sign Out</a>
        </div>
    </div>
@endsection

@section('username', $username)
