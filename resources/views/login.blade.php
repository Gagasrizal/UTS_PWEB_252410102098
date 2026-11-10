@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="card login-box">
    <h1>PerpusKu</h1>
    <p class="sub">Masuk untuk mengelola koleksi buku.</p>

    <form action="{{ route('login.proses') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Masukkan username">
        @error('username')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn">Masuk</button>
    </form>
</div>
@endsection
