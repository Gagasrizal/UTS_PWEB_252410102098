@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h1>Pengelolaan Buku</h1>
<p class="sub">Daftar koleksi buku perpustakaan.</p>

<div class="card table-wrap">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td>{{ $item['tahun'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>
                        @if ($item['stok'] > 0)
                            <span class="badge ok">Tersedia</span>
                        @else
                            <span class="badge habis">Habis</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
