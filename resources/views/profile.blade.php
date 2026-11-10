@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h1>Profile</h1>
<p class="sub">Informasi akun yang sedang masuk.</p>

<div class="card">
    <div class="avatar">{{ strtoupper(mb_substr($username, 0, 1)) }}</div>

    @foreach ($profil as $label => $isi)
        <div class="profile-row">
            <span>{{ $label }}</span>
            <strong>{{ $isi }}</strong>
        </div>
    @endforeach
</div>
@endsection
