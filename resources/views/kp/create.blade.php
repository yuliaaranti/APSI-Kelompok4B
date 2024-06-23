@extends('app')
@section('content')
    <main>
        <form action="{{ route('kp.store') }}" method="POST" id="kpForm" enctype="multipart/form-data">
            @csrf
            <section class="personal-data">
                <h2>Isikan Data Kerja Praktik Anda</h2>

                <div class="form-row">
                    <label for="lokasi">Lokasi KP:</label>
                    <input type="text" id="lokasi" name="lokasi" required>
                </div>
            </section>
            <button type="submit">Simpan Data</button>
        </form>
    </main>
@endsection