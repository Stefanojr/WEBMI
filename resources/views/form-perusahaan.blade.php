<!DOCTYPE html>
<html>
<head>
    <title>Form Perusahaan</title>
</head>
<body>
    <h1>Tambah Perusahaan</h1>
    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

    <form action="/insert-perusahaan" method="POST">
        @csrf
        <label for="nama_perusahaan">Nama Perusahaan:</label>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
