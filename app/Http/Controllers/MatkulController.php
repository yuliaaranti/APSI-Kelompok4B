<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkuls = Matkul::paginate(200);
        return view('matkul.index', compact('matkuls'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'sks' => 'required'
            ],
            [
                'nama.required' => 'Nama can\'t be empty!',
                'sks.required' => 'SKS can\'t be empty!',
            ]
        );

        Matkul::create([
            'nama' => $request->nama,
            'sks' => $request->sks
        ]);

        return redirect('matkul');
    }
}
