<h1>Data Sepatu</h1>

<a href="/sepatu/create">Tambah Sepatu</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    @foreach($sepatu as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->merk }}</td>
        <td>{{ $s->harga }}</td>
        <td>
            <a href="/sepatu/{{ $s->id }}/edit">Edit</a>

            <form action="/sepatu/{{ $s->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>