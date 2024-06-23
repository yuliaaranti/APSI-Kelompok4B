@extends('app')
@section('content')
<main>

    <div class="container-fluid p-5">
        <h2>Daftar Data Dosen Pembimbing</h2>

        <input type="text" id="dosbingInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
        <table id="dosbingTable" class="table table-bordered align-middle">

            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Lengkap</th>
                </tr>
            </thead>

            @php
            $count = ($dosbings->currentPage() - 1) * $dosbings->perPage() + 1;
            @endphp

            <tbody>
                @foreach ($dosbings as $dosbing)
                <tr>
                    <td class="px-3 text-center">{{ $count++ }}</td>
                    <td class="px-3">{{ $dosbing->nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, j, txtValue;
                input = document.getElementById("dosbingInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("dosbingTable");
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

        <a class="lihat px-2 py-1 m-2" href="{{ route('dosbing.create') }}" role="button">Tambah Dosen Pembimbing</a>

    </div>

</main>
@endsection