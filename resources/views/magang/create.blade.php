@extends('app')
@section('content')
    <main>
        <form action="{{ route('magang.store') }}" method="POST" id="magangForm" enctype="multipart/form-data">
            @csrf
            <section class="personal-data">
                <h2>Isikan Data Magang Anda</h2>

                <div class="form-row">
                    <label for="lokasi">Lokasi Magang:</label>
                    <input type="text" id="lokasi" name="lokasi" required>
                </div>

                <div class="form-row">
                    <label for="dosbing_id">Dosen Pembimbing:</label>
                    <select id="dosbing_id" name="dosbing_id" required>
                        <option value="0">Pilih Dosen Pembimbing</option>
                        @foreach($dosbings as $dosbing)
                        <option value="{{ $dosbing->id }}">{{ $dosbing->nama }}</option>
                        @endforeach
                    </select>
                </div>

            </section>
            <button type="submit">Simpan Data</button>
        </form>
    </main>
    @endsection