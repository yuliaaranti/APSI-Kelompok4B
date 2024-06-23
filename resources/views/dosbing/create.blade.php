@extends('app')
@section('content')
    <main>
        <form action="{{ route('dosbing.store') }}" method="POST" id="dosbingForm" enctype="multipart/form-data">
            @csrf
            <section class="personal-data">
                <h2>Isikan Data Dosen Pembimbing</h2>

                <div class="form-row">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
            </section>
            <button type="submit">Simpan Data</button>
        </form>
    </main>
@endsection