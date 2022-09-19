<html>

<head>
    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h2>Laporan Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $i => $mhs)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->kelas }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
