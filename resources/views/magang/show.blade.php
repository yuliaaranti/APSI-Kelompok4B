@extends('app')
@section('content')



<main>

    <section class="personal-data">
        <h2 style="margin-bottom: 20px;">Detail Data </h2>

        <div class="form-row">
            <p class="hasil">Status: {{ $magang->status }}</p>
        </div>

        <div class="form-row">
            <p class="hasil">Nama Lengkap: {{ $magang->mahasiswa->nama }}</p>
        </div>

        <div class="form-row">
            <p class="hasil">Dosen Pembimbing: {{ $magang->dosbing->nama }}</p>
        </div>

        <div class="form-row">
            <p class="hasil">Lokasi Magang: {{ $magang->lokasi }}</p>
        </div>

        @if ($magang->kontak)
        <div class="form-row">
            <p class="hasil">CP Tempat Magang: {{ $magang->kontak }}</p>
        </div>
        @endif

        @if ($magang->bidang)
        <div class="form-row">
            <p class="hasil">Bidang: {{ $magang->bidang }}</p>
        </div>
        @endif

        @if ($magang->laporan)
        <div class="form-row">
            <p class="hasil">Judul Laporan Magang: {{ $magang->laporan }}</p>
        </div>
        @endif

        @if ($magang->matkuls->count() > 0)
        <div class="form-row">
            <p class="hasil">Matkul Rekognisi:
                @foreach($magang->matkuls as $matkul)
                {{ $matkul->nama }} ({{ $matkul->sks }})
                @if (!$loop->last)
                ,
                @endif
                @endforeach
            </p>
        </div>
        @endif
    </section>

    @if ($magang->status == "Melengkapi Data" && Auth::guard('web')->check() && Auth::id() == $magang->mahasiswa->id)
    <a href="{{ route('magang.edit', ['id' => $magang->id]) }}"><button type="button">Lengkapi Data</button></a>
    @elseif ($magang->status == "Verifikasi Ajuan" && (Auth::guard('kaprodis')->check() || Auth::guard('admins')->check()))
    <form action="{{ route('magang.verifAjuan') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $magang->id }}" />
        <button type="submit" name="submit_button" value="terima">
            Terima Ajuan
        </button>
        <button style="margin-top:8px" type="submit" name="submit_button" value="tolak">
            Tolak Ajuan
        </button>
    </form>
    @elseif ($magang->status == "Verifikasi Rekognisi" && (Auth::guard('kaprodis')->check() || Auth::guard('admins')->check()))
    <form action="{{ route('magang.verifRekognisi') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $magang->id }}" />
        <button type="submit" name="submit_button" value="terima">
            Terima Rekognisi
        </button>
        <button style="margin-top:8px" type="submit" name="submit_button" value="tolak">
            Tolak Rekognisi
        </button>
    </form>
    @endif
</main>

@endsection