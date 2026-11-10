@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Halo, {{ $username }}!</h1>
<p class="sub">Ringkasan koleksi perpustakaan hari ini.</p>

<div class="grid">
    @foreach ($stats as $label => $nilai)
        <div class="card stat">
            <strong>{{ $nilai }}</strong>
            <span>{{ $label }}</span>
        </div>
    @endforeach
</div>

<div class="card">
    <h2>Kelola koleksi</h2>
    <p class="sub">Lihat daftar buku dan cek stok yang tersedia.</p>
    <a class="btn btn-auto" href="{{ route('pengelolaan', ['username' => $username]) }}">Buka Pengelolaan</a>
</div>
@endsection
