<?php

namespace App\Http\Controllers;

use App\Models\Dosbing;
use Illuminate\Http\Request;

class DosbingController extends Controller
{
    public function index()
    {
        $dosbings = Dosbing::paginate(200);
        return view('dosbing.index', compact('dosbings'));
    }

    public function create()
    {
        return view('dosbing.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
            ],
            [
                'nama.required' => 'Nama can\'t be empty!',
            ]
        );

        Dosbing::create([
            'nama' => $request->nama
        ]);

        return redirect('dosbing');
    }
}
