<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $data = [
        ['id'=>1, 'judul'=>'Pemrograman PHP', 'penulis'=>'Andi', 'status'=>'Tersedia'],
        ['id'=>2, 'judul'=>'Struktur Data', 'penulis'=>'Budi', 'status'=>'Dipinjam'],
        ['id'=>3, 'judul'=>'Basis Data', 'penulis'=>'Citra', 'status'=>'Tersedia']
    ];

    public function index() {
        $buku = $this->data;
        return view('buku.index', compact('buku'));
    }

    public function show($id) {
        $bk = collect($this->data)->firstWhere('id', (int)$id);
        if (!$bk)
            abort(404);
        return view('buku.show', compact('bk'));
    }

    public function available() {
        $stat = collect($this->data)->filter(function ($item) {
            return isset($item['status']) && $item['status'] === 'Tersedia';
        })->values();

        return view('buku.available', compact('stat'));
    }
}