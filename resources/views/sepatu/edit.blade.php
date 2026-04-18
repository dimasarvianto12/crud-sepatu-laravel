<!DOCTYPE html>
<html>
<head>
    <title>Edit Sepatu</title>
</head>
<body>

    <h1>Edit Sepatu</h1>

    <form action="/sepatu/{{ $sepatu->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $sepatu->nama }}"><br><br>

        <label>Merk:</label><br>
        <input type="text" name="merk" value="{{ $sepatu->merk }}"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $sepatu->harga }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/sepatu">Kembali</a>

</body>
</html>