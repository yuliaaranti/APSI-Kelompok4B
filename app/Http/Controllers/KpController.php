<?php

namespace App\Http\Controllers;

use App\Models\Kp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KpController extends Controller
{
    public function index()
    {
        $kps = Kp::paginate(200);
        return view('kp.index', compact('kps'));
    }

    public function show($id)
    {
        $kp = Kp::findOrFail($id);
        return view('kp.show', compact('kp'));
    }

    public function verif(Request $request)
    {
        if ($request->submit_button === 'terima') {
            KP::findOrFail($request->id)->update([
                'status' => 'Diterima'
            ]);
        } 
        elseif ($request->submit_button === 'tolak') {
            KP::findOrFail($request->id)->update([
                'status' => 'Ditolak'
            ]);
        } 

        return redirect('kp');
    }

    public function create()
    {
        return view('kp.create');
    }

    public function store(Request $request){
        $request->validate(
            [
                'lokasi' => 'required',
            ],
            [
                'lokasi.required' => 'Lokasi can\'t be empty!',
            ]
        );

        KP::create([
            'status' => 'Verifikasi Ajuan',
            'lokasi' => $request->lokasi,
            'mahasiswa_id' => Auth::id()
        ]);

        return redirect('kp');
    }

    public function edit($id)
    {
        $kp = Kp::findOrFail($id);
        return view('kp.edit', compact('kp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'lokasi' => 'required',
                'kontak' => 'required',
                'bidang' => 'required',
                'laporan' => 'required',
                'review' => 'required',
                'pdf' => 'mimes:pdf'
            ],
            [
                'lokasi.required' => 'Lokasi can\'t be empty!',
                'kontak.required' => 'Kontak can\'t be empty!',
                'bidang.required' => 'Bidang can\'t be empty!',
                'laporan.required' => 'Laporan can\'t be empty!',
                'review.required' => 'Review can\'t be empty!',
                'pdf.mimes' => 'File must be PDF!',
            ]
        );

        $file = $request->file('pdf');
        if ($file != NULL){
            $file_ext = $file->extension();
            $file_new = date('ydmhis') . "." . $file_ext;
            $file->move(public_path('pdf'), $file_new);
            
            KP::findOrFail($id)->update([
                'pdf' => $file_new
            ]);
        }

        KP::findOrFail($id)->update([
            'lokasi' => $request->lokasi,
            'kontak' => $request->kontak,
            'bidang' => $request->bidang,
            'laporan' => $request->laporan,
            'review' => $request->review,
        ]);

        return redirect()->route('kp.show', ['id' => $id]);
    }
}
