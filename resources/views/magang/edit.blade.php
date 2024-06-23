@extends('app')
@section('content')
<main>
    <form action="{{ route('magang.update', ['id' => $magang->id]) }}" method="POST" id="magangEditForm" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <section class="personal-data">
            <h2>Edit Data Magang Anda</h2>

            <div class="form-row">
                <label for="lokasi">Lokasi Magang:</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ $magang->lokasi }}">
            </div>

            <div class="form-row">
                <label for="bidang">Bidang:</label>
                <input type="text" id="bidang" name="bidang" value="{{ $magang->bidang }}">
            </div>

            <div class="form-row">
                <label for="kontak">CP Tempat Magang:</label>
                <input type="text" id="kontak" name="kontak" value="{{ $magang->kontak }}">
            </div>

            <div class="form-row">
                <label for="laporan">Judul Laporan Magang:</label>
                <input type="text" id="laporan" name="laporan" value="{{ $magang->laporan }}">
            </div>

            <div class="form-row">
                <label for="dosbing_id">Dosen Pembimbing:</label>
                <select id="dosbing_id" name="dosbing_id" required>
                    <option>Pilih Dosen Pembimbing</option>
                    @foreach($dosbings as $dosbing)
                    <option value="{{ $dosbing->id }}" @if($dosbing->id == $magang->dosbing->id) selected @endif>{{ $dosbing->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-row">
                <label for="matkuls">Matkul Rekognisi:</label><br>
                @foreach($matkuls as $matkul)
                <label>
                    <input type="checkbox" name="matkuls[]" value="{{ $matkul->id }}"> {{ $matkul->nama }} ({{ $matkul->sks }})
                </label><br>
                @endforeach
            </div>

        </section>
        <button type="submit">Ajukan Rekognisi</button>
    </form>
</main>
@endsection