<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    protected $data = [
        ['id'=>1, 'nama'=>'Lerri1', 'npm'=>'23081010213'],
        ['id'=>2, 'nama'=>'Lerri2', 'npm'=>'23081010216'],
        ['id'=>3, 'nama'=>'Lerri3', 'npm'=>'23081010219']
    ];

    public function index() {
        $mahasiswa = $this->data;
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function show($id) {
        $goat = collect($this->data)->firstWhere('id', (int) $id);
        if (!$goat)
            abort(404);
        return view('mahasiswa.show', compact('goat'));
    }
}