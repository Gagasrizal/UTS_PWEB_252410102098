<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data buku disimpan di controller, lalu dikirim ke view
    private function dataBuku()
    {
        return [
            ['judul' => 'Laskar Pelangi',   'penulis' => 'Andrea Hirata',          'tahun' => 2005, 'stok' => 5],
            ['judul' => 'Bumi Manusia',     'penulis' => 'Pramoedya Ananta Toer',  'tahun' => 1980, 'stok' => 3],
            ['judul' => 'Negeri 5 Menara',  'penulis' => 'Ahmad Fuadi',            'tahun' => 2009, 'stok' => 0],
            ['judul' => 'Pulang',           'penulis' => 'Tere Liye',              'tahun' => 2015, 'stok' => 7],
            ['judul' => 'Cantik Itu Luka',  'penulis' => 'Eka Kurniawan',          'tahun' => 2002, 'stok' => 2],
        ];
    }

    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Proses login: username dikirim ke dashboard lewat request parameter (?username=...)
    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.min'      => 'Username minimal 3 karakter.',
        ]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        $buku = $this->dataBuku();
        $stats = [
            'Total Judul' => count($buku),
            'Total Stok'  => array_sum(array_column($buku, 'stok')),
            'Stok Habis'  => count(array_filter($buku, fn ($b) => $b['stok'] == 0)),
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        $buku = $this->dataBuku();

        return view('pengelolaan', compact('username', 'buku'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (!$username) {
            return redirect()->route('login');
        }

        $profil = [
            'Username' => $username,
            'Peran'    => 'Pustakawan',
            'Unit'     => 'Perpustakaan Pusat',
            'Status'   => 'Aktif',
        ];

        return view('profile', compact('username', 'profil'));
    }
}
