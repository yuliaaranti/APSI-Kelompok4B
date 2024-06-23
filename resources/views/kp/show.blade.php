@extends('app')
@section('content')
<main>

    <section class="personal-data">
        <h2 style="margin-bottom: 20px;">Detail Data Kerja Praktik</h2>

        <div class="form-row">
            <p class="hasil">Status: {{ $kp->status }}</p>
        </div>

        <div class="form-row">
            <p class="hasil">Nama Lengkap: {{ $kp->mahasiswa->nama }}</p>
        </div>

        <div class="form-row">
            <p class="hasil">Lokasi KP: {{ $kp->lokasi }}</p>
        </div>

        @if ($kp->kontak)
        <div class="form-row">
            <p class="hasil">CP Tempat KP: {{ $kp->kontak }}</p>
        </div>
        @endif

        @if ($kp->bidang)
        <div class="form-row">
            <p class="hasil">Bidang: {{ $kp->bidang }}</p>
        </div>
        @endif

        @if ($kp->review)
        <div class="form-row">
            <p class="hasil">Review Tempat KP: {{ $kp->review }}</p>
        </div>
        @endif

        @if ($kp->laporan)
        <div class="form-row">
            <p class="hasil">Judul Laporan KP: {{ $kp->laporan }}</p>
        </div>
        @endif

        @if ($kp->pdf)
            <div class="form-row">
                <p class="hasil">File PDF Laporan KP:</p>
                <iframe src="{{ url('pdf').'/'.$kp->pdf }}" width="100%" height="600px">
                    This browser does not support PDFs. Please download the PDF to view it: 
                    <a href="{{ url('pdf').'/'.$kp->pdf }}">Download PDF</a>
                </iframe>
            </div>
        @endif

    </section>

    @if (Auth::guard('web')->check() && Auth::id() == $kp->mahasiswa->id && $kp->status == "Diterima")
    <a href="{{ route('kp.edit', ['id' => $kp->id]) }}"><button type="button">Edit Data</button></a>
    @elseif ($kp->status == "Verifikasi Ajuan" && (Auth::guard('koors')->check() || Auth::guard('admins')->check()))
    <form action="{{ route('kp.verif') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $kp->id }}" />
        <button type="submit" name="submit_button" value="terima">
            Terima Ajuan
        </button>
        <button style="margin-top:8px" type="submit" name="submit_button" value="tolak">
            Tolak Ajuan
        </button>
    </form>
    @endif
</main>
@endsection