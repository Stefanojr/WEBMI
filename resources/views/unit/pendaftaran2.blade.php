@extends('unit.layout.main')
@section('title', 'Form Pendaftaran')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../../css/background.css">
<link rel="stylesheet" href="../../css/formDaftar.css">
<link rel="stylesheet" href="../../css/tableUnitDash.css">
<html>
<head>
    <title>Permohonan Pendaftaran Management Improvement</title>
    <script>
        function addToTable() {
            // Mengambil nilai dari input
            var jabatan = document.getElementById("jabatan").value;
            var perner = document.getElementById("perner").value;
            var nama = document.getElementById("nama").value;
            var foto = document.getElementById("foto").files[0] ? document.getElementById("foto").files[0].name : '';

            // Mendapatkan tabel dan menambahkan baris baru
            var table = document.getElementById("strukturOrganisasiTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow();

            // Menambahkan sel ke baris baru
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);

            // Mengisi sel dengan data
            cell1.innerHTML = '<a href="">Edit</a>';
            cell2.innerHTML = table.rows.length; // Nomor urut
            cell3.innerHTML = jabatan;
            cell4.innerHTML = perner;
            cell5.innerHTML = nama;
            cell5.innerHTML += '<br>' + foto; // Menampilkan nama file foto

            // Mengosongkan input setelah ditambahkan
            document.getElementById("jabatan").value = '';
            document.getElementById("perner").value = '';
            document.getElementById("nama").value = '';
            document.getElementById("foto").value = '';
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>PERMOHONAN PENDAFTARAN MANAGEMENT IMPROVEMENT</h1>

        <div class="form-group">
            <label for="idDaftar">ID Pendaftaran</label>
            <input type="text" id="idDaftar" name="idDaftar" disabled>
        </div>
        <div class="section-title">IDENTITAS GRUP</div>
        <div class="form-group">
            <label for="pabrik">Pabrik / Departemen</label>
            <input type="text" id="pabrik" name="pabrik" required>
        </div>
        <div class="form-group">
            <label for="unit">Unit</label>
            <input type="text" id="unit" name="unit" required>
        </div>
        <div class="form-group">
            <label for="nama-kelompok">Nama Kelompok</label>
            <input type="text" id="nama-kelompok" name="nama-kelompok" required>
        </div>
        <div class="form-group" >
            <label for="group">Kriteria Improvement</label>
            <select id="group">
                <option value="" disabled selected>Pilih Kriteria</option>
                <option value="scft">SIDO CROSS FUNCTIONAL TEAM (SCFT)</option>
                <option value="sga">SIDO GROUP ACTIVITY (SGA)</option>
                <option value="ss">SIDO SARAN (SS)</option>
            </select>

        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Pendaftaran</label>
            <div class="date-icon">
                <input type="date" id="tanggal" value="Date">

            </div>
        </div>
        <div class="section-title">KETERANGAN TEMA</div>
        <div class="form-group">
            <label for="nomor-tema">Nomor Tema</label>
            <input type="text" id="nomor-tema">
        </div>
        <div class="form-group">
            <label for="tema">Judul</label>
            <input type="text" id="tema">
        </div>
        <div class="form-group">
            <label for="tema">Tema</label>
            <input type="text" id="tema">
        </div>

        <div class="section-title">STRUKTUR ORGANISASI</div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" id="jabatan" required/>
        </div>
        <div class="form-group">
            <label>Perner</label>
            <input type="text" id="perner" required/>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" id="nama" required/>
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" id="foto" accept=".jpg, .jpeg, .png" required/>
        </div>
        <button type="button" class="insert-btn" onclick="addToTable()">+ Tambah</button>

        <table id="strukturOrganisasiTable">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>No.</th>
                    <th>Jabatan</th>
                    <th>Perner</th>
                    <th>Nama</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data akan ditambahkan di sini -->
            </tbody>
        </table>




        <button class="submit-btn">SUBMIT</button>
    </div>
    </div>

</body>
</html>
@endsection
