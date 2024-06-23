@extends('app')
@section('content')
<main>

    <div class="container-fluid p-5">
        <h2>Daftar Data Magang</h2>

        <input type="text" id="magangInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
        <table id="magangTable" class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Nama Lengkap</th>
                    <th scope="col" class="text-center">Dosen Pembimbing</th>
                    <th scope="col" class="text-center">Lokasi Magang</th>
                    <th scope="col" class="text-center">Bidang</th>
                    <th scope="col" class="text-center">Judul Laporan Magang</th>
                    <th scope="col" class="text-center">Detail</th>
                </tr>
            </thead>

            @php
            $count = ($magangs->currentPage() - 1) * $magangs->perPage() + 1;
            @endphp

            <tbody>
                @foreach($magangs as $magang)
                <tr>
                    <td class="px-3 text-center">{{ $count++ }}</td>
                    <td class="px-3">{{ $magang->status }}</td>
                    <td class="px-3">{{ $magang->mahasiswa->nama }}</td>
                    <td class="px-3">{{ $magang->dosbing->nama }}</td>
                    <td class="px-3">{{ $magang->lokasi }}</td>
                    <td class="px-3">{{ $magang->bidang }}</td>
                    <td class="px-3">{{ $magang->laporan }}</td>
                    <td class="text-center py-3">
                        <a class="lihat px-2 py-1 m-2" href="{{ route('magang.show', ['id' => $magang->id]) }}" role="button">Lihat</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, j, txtValue;
                input = document.getElementById("magangInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("magangTable");
                tr = table.getElementsByTagName("tr");

                for (i = 1; i < tr.length; i++) { // Skip the header row
                    tr[i].style.display = "none"; // Initially hide the row
                    td = tr[i].getElementsByTagName("td");
                    for (j = 0; j < td.length; j++) {
                        if (td[j]) {
                            txtValue = td[j].textContent || td[j].innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = ""; // Show the row if any cell matches
                                break;
                            }
                        }
                    }
                }
            }
        </script>

        @if (Auth::guard('web')->check() && Auth::user()->semester > 6)
        <a class="lihat px-2 py-1 m-2" href="{{ route('magang.create') }}" role="button">Tambah Ajuan Magang</a>
        @endif
    </div>

</main>
@endsection
