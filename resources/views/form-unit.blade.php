<form action="/insert-unit" method="POST">
    @csrf
    <label for="id_perusahaan">Perusahaan:</label>
    <select id="id_perusahaan" name="id_perusahaan" required>
        <option value="">-- Pilih Perusahaan --</option>
        @foreach ($perusahaan as $p)
            <option value="{{ $p->id_perusahaan }}">{{ $p->nama_perusahaan }}</option>
        @endforeach
    </select>

    <label for="nama_unit">Nama Unit:</label>
    <input type="text" id="nama_unit" name="nama_unit" required>

    <button type="submit">Simpan</button>
</form>
