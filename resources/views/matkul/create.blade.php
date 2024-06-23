@extends('app')
@section('content')
    <main>
        <form action="{{ route('matkul.store') }}" method="POST" id="matkulForm" enctype="multipart/form-data">
            @csrf
            <section class="personal-data">
                <h2>Isikan Data Mata Kuliah</h2>

                <div class="form-row">
                    <label for="nama">Nama Mata Kuliah:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-row">
                    <label for="sks">Banyak SKS:</label>
                    <input type="number" id="sks" name="sks" required>
                </div>
            </section>
            <button type="submit">Simpan Data</button>
        </form>
    </main>

@endsection