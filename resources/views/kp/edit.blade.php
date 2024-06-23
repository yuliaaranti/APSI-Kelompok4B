@extends('app')
@section('content')
    <main>
        <form action="{{ route('kp.update', ['id' => $kp->id]) }}" id="kpEditForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <section class="personal-data">
                <h2>Edit Data Kerja Praktik Anda</h2>

                <div class="form-row">
                    <label for="lokasi">Lokasi KP:</label>
                    <input type="text" id="lokasi" name="lokasi" value="{{ $kp->lokasi }}">
                </div>

                <div class="form-row">
                    <label for="kontak">CP Tempat KP:</label>
                    <input type="text" id="kontak" name="kontak" value="{{ $kp->kontak }}">
                </div>

                <div class="form-row">
                    <label for="bidang">Bidang:</label>
                    <input type="text" id="bidang" name="bidang" value="{{ $kp->bidang }}">
                </div>

                <div class="form-row">
                    <label for="laporan">Judul Laporan KP:</label>
                    <input type="text" id="laporan" name="laporan" value="{{ $kp->laporan }}">
                </div>
                
                <div class="form-row">
                    <label for="pdf">File PDF Laporan KP:</label>
                    <div><input type="file" id="pdf" name="pdf" value=""></div>
                </div>

                <div class="form-row">
                    <label for="review">Review Tempat KP:</label>
                    <textarea id="review" name="review">{{ $kp->review }}</textarea>
                </div>

            </section>
            <button type="submit">Simpan Data</button>
        </form>
    </main>
@endsection