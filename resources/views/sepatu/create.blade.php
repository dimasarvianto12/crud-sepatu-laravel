<h1>Tambah Sepatu</h1>

<form action="/sepatu" method="POST">
    @csrf

    Nama: <input type="text" name="nama"><br><br>
    Merk: <input type="text" name="merk"><br><br>
    Harga: <input type="number" name="harga"><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="/sepatu">Kembali</a>