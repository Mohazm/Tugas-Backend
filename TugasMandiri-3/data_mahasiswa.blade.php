

<table border="1" width="25%"  class='table table-striped table-hover table-bordered'>
    <thead>
        <tr >
            @foreach($judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody >
        @foreach($siswa as $i)
        <tr >
            <td>{{ $no++ }}</td>
            <td>{{ $i['nama'] }}</td>
            <td>{{ $i['alamat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>