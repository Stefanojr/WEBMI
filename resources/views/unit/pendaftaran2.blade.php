@extends('unit.layout.main')
@section('title', 'Form Pendaftaran')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../../css/background.css">
<link rel="stylesheet" href="../../css/formDaftar.css">
<link rel="stylesheet" href="../../css/tableUnitDash.css">

<div class="container">
    <h1>FORM PERMOHONAN PENDAFTARAN MANAGEMENT IMPROVEMENT</h1>

    <!-- Error Handling -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Form Identitas Grup -->
        <div class="section-title">IDENTITAS GRUP</div>

        <!-- Pabrik -->
        <div class="form-group">
            <label for="pabrik">Pabrik / Departemen</label>
            <select id="pabrik" name="pabrik" required>
                <option value="" disabled selected>Pilih Pabrik</option>
                @foreach ($perusahaans as $perusahaan)
                    <option value="{{ $perusahaan->id_perusahaan }}" {{ old('pabrik') == $perusahaan->id_perusahaan ? 'selected' : '' }}>
                        {{ $perusahaan->nama_perusahaan }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Unit -->
        <div class="form-group">
            <label for="unit">Unit</label>
            <select id="unit" name="unit" required>
                <option value="" disabled selected>Pilih Unit</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_grup">Nama Grup</label>
            <input type="text" id="nama_grup" name="nama_grup" value="{{ old('nama_grup') }}" required>
        </div>
        <div class="form-group">
            <label for="kreteria_grup">Kriteria Improvement</label>
            <select id="kreteria_grup" name="kreteria_grup" required>
                <option value="" disabled selected>Pilih Kriteria</option>
                <option value="scft">SIDO CROSS FUNCTIONAL TEAM (SCFT)</option>
                <option value="sga">SIDO GROUP ACTIVITY (SGA)</option>
                <option value="ss">SIDO SARAN (SS)</option>
            </select>
        </div>

        <!-- Form Keterangan Tema -->
        <div class="section-title">KETERANGAN TEMA</div>
        <div class="form-group">
            <label for="nomor_tema">Nomor Tema</label>
            <input type="text" id="nomor_tema" name="nomor_tema" value="{{ old('nomor_tema') }}" required>
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul') }}" required>
        </div>
        <div class="form-group">
            <label for="tema">Tema</label>
            <textarea id="tema" name="tema" required>{{ old('tema') }}</textarea>
        </div>

        <!-- Form Struktur Organisasi Grup -->
        <div class="section-title">STRUKTUR ORGANISASI</div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="grup_temp[jabatan_grup]">
        </div>
        <div class="form-group">
            <label>Perner</label>
            <input type="text" name="grup_temp[perner]">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="grup_temp[nama]">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="grup_temp[foto]" accept=".jpg, .jpeg, .png">
        </div>

        <!-- Input hidden untuk menyimpan data grup -->
        <input type="hidden" name="grup_data" id="grup_data">

        <!-- Tombol Tambah Grup -->
        <button type="button" onclick="addGrup()">+ Tambah Grup</button>

        <!-- Tabel untuk menampilkan grup yang ditambahkan -->
        <table>
            <thead>
                <tr>
                    <th>Jabatan</th>
                    <th>Perner</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="grup-table-body">
                <!-- Grup yang ditambahkan secara dinamis akan masuk ke sini -->
            </tbody>
        </table>

        <button type="submit" class="submit-btn">SUBMIT</button>
    </form>
</div>

@push('scripts')
<script>
    var grupData = [];
    var grupIndex = 0;

    function addGrup() {
        var jabatan = document.querySelector('[name="grup_temp[jabatan_grup]"]').value;
        var perner = document.querySelector('[name="grup_temp[perner]"]').value;
        var nama = document.querySelector('[name="grup_temp[nama]"]').value;
        var fotoInput = document.querySelector('[name="grup_temp[foto]"]');
        var foto = fotoInput.files[0];

        if (!jabatan || !perner || !nama) {
            alert("Semua kolom harus diisi!");
            return;
        }

        grupData.push({
            jabatan,
            perner,
            nama,
            foto: foto ? foto.name : "Tidak ada foto"
        });

        var tableBody = document.getElementById("grup-table-body");
        var newRow = `
            <tr id="grup-row-${grupIndex}">
                <td>${jabatan}</td>
                <td>${perner}</td>
                <td>${nama}</td>
                <td>${foto ? foto.name : 'Tidak ada foto'}</td>
                <td><button type="button" onclick="removeGrup(${grupIndex})">Hapus</button></td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', newRow);

        document.querySelector('[name="grup_temp[jabatan_grup]"]').value = '';
        document.querySelector('[name="grup_temp[perner]"]').value = '';
        document.querySelector('[name="grup_temp[nama]"]').value = '';
        fotoInput.value = '';

        grupIndex++;
        updateGrupDataInput();
    }

    function removeGrup(index) {
        grupData.splice(index, 1);
        var row = document.getElementById(`grup-row-${index}`);
        if (row) {
            row.remove();
        }
        updateGrupDataInput();
    }

    function updateGrupDataInput() {
        var grupDataInput = document.getElementById('grup_data');
        grupDataInput.value = JSON.stringify(grupData);
    }

    document.getElementById('pabrik').addEventListener('change', function() {
        var perusahaanId = this.value;

        if (perusahaanId) {
            fetch('{{ route('get-units') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ id_perusahaan: perusahaanId })
            })
            .then(response => response.json())
            .then(data => {
                var unitSelect = document.getElementById('unit');
                unitSelect.innerHTML = '<option value="" disabled selected>Pilih Unit</option>';

                data.forEach(function(unit) {
                    var option = document.createElement('option');
                    option.value = unit.id_unit;
                    option.textContent = unit.nama_unit;
                    unitSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error:', error));
        }
    });

</script>
@endpush

@endsection
