<?php

namespace App\Http\Controllers;

use App\Models\Dosbing;
use App\Models\Magang;
use App\Models\MagangMatkul;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MagangController extends Controller
{
    public function index()
    {
        $magangs = Magang::paginate(200);
        return view('magang.index', compact('magangs'));
    }

    public function show($id)
    {
        $magang = Magang::findOrFail($id);
        return view('magang.show', compact('magang'));
    }

    public function create()
    {
        $dosbings = Dosbing::all();
        return view('magang.create', compact('dosbings'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'lokasi' => 'required',
                'dosbing_id' => 'gt:0'
            ],
            [
                'lokasi.required' => 'Lokasi can\'t be empty!',
                'dosbing_id.gt' => 'Dosbing can\'t be empty!'
            ]
        );

        Magang::create([
            'status' => 'Verifikasi Ajuan',
            'lokasi' => $request->lokasi,
            'mahasiswa_id' => Auth::id(),
            'dosbing_id' => $request->dosbing_id
        ]);

        return redirect('magang');
    }

    public function verifAjuan(Request $request)
    {
        if ($request->submit_button === 'terima') {
            Magang::findOrFail($request->id)->update([
                'status' => 'Melengkapi Data'
            ]);
        } elseif ($request->submit_button === 'tolak') {
            Magang::findOrFail($request->id)->update([
                'status' => 'Ditolak'
            ]);
        }

        return redirect('magang');
    }

    public function verifRekognisi(Request $request)
    {
        if ($request->submit_button === 'terima') {
            Magang::findOrFail($request->id)->update([
                'status' => 'Diterima'
            ]);
        } elseif ($request->submit_button === 'tolak') {
            Magang::findOrFail($request->id)->update([
                'status' => 'Ditolak'
            ]);
        }

        return redirect('magang');
    }

    public function edit($id)
    {
        $dosbings = Dosbing::all();
        $matkuls = Matkul::all();
        $magang = Magang::findOrFail($id);
        return view('magang.edit', compact('magang', 'dosbings', 'matkuls'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate(
            [
                'lokasi' => 'required',
                'dosbing_id' => 'gt:0',
                'bidang' => 'required',
                'kontak' => 'required',
                'laporan' => 'required',
                'matkuls' => 'required',
            ],
            [
                'lokasi.required' => 'Lokasi can\'t be empty!',
                'dosbing_id.gt' => 'Dosbing can\'t be empty!',
                'bidang.gt' => 'Bidang can\'t be empty!',
                'kontak.gt' => 'Kontak can\'t be empty!',
                'laporan.gt' => 'Laporan can\'t be empty!',
                'matkuls.gt' => 'Matkul can\'t be empty!',
            ]
        );

        Magang::findOrFail($id)->update([
            'lokasi' => $request->lokasi,
            'kontak' => $request->kontak,
            'bidang' => $request->bidang,
            'laporan' => $request->laporan,
            'dosbing_id' => $request->dosbing_id,
            'status' => 'Verifikasi Rekognisi'
        ]);

        foreach ($request->matkuls as $matkul){
            MagangMatkul::create([
                'magang_id' => $id,
                'matkul_id' => $matkul
            ]);
        }

        return redirect('magang');
    }
}
