<html>
    <head></head>
    <body>
        <table border="'1">
            <tr>
                <th>Id</th>
                <th>Nomor kamar</th>
                <th>tipe Kamar</th>
                <th>Action</th>
            </tr>

            @foreach ($kamarhotel as $kh)
            <tr>
                <td>{{ $kh->id }}</td>
                <td>{{ $kh->no_kamar }}</td>
                <td>{{ $kh->tipe_kamar }}</td>
                <td>
                    <a href="/edit/{{ $kh->id }}">Edit</a>
                    |
                    <a href="/delete/{{ $kh->id }}">Hapus</a>
                </td>
            </tr>

            @endforeach
        </table>
    </body>
</html>