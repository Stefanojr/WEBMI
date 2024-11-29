// user.blade.php
@extends('sysadmin.layout.main')

@section('title', 'Manajemen Pengguna')

@section('content')
<style>
    /* Umum */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #eaf7ea; /* Hijau lembut */
        color: #2c3e50;
        margin: 0;
        padding: 0;
    }

    .table-container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-radius: 12px;
    }

    h2 {
        text-align: center;
        color: #27ae60;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Tombol */
    .input-data-btn {
        background-color: #27ae60;
        color: white;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .input-data-btn:hover {
        background-color: #1e8749;
        transform: scale(1.05);
    }

    .edit-btn, .delete-btn {
        padding: 8px 12px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .edit-btn {
        background-color: #f39c12;
        color: white;
    }

    .edit-btn:hover {
        background-color: #d68910;
    }

    .delete-btn {
        background-color: #e74c3c;
        color: white;
    }

    .delete-btn:hover {
        background-color: #c0392b;
    }

    /* Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 14px;
    }

    th, td {
        text-align: center;
        padding: 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #27ae60;
        color: white;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #eafaf1;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        list-style: none;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a, .pagination span {
        color: #27ae60;
        text-decoration: none;
        padding: 8px 12px;
        border: 1px solid #27ae60;
        border-radius: 5px;
        transition: 0.3s;
    }

    .pagination a:hover {
        background-color: #27ae60;
        color: white;
    }

    .pagination .active span {
        background-color: #27ae60;
        color: white;
        border-color: #27ae60;
    }

    /* Popup */
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 500px;
    }

    .popup-content h3 {
        margin-bottom: 20px;
        color: #27ae60;
    }

    .popup-content input, .popup-content select {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .popup-content button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .popup-content .close-btn {
        background-color: #e74c3c;
        color: white;
        margin-left: 10px;
    }

    .popup-content .close-btn:hover {
        background-color: #c0392b;
    }
</style>

<div class="table-container">
    <h2>Manajemen Pengguna</h2>

    <!-- Tombol Tambah Pengguna -->
    <div style="text-align: center; margin-bottom: 20px;">
        <button class="input-data-btn" onclick="openInputPopup()">+ Tambah Pengguna</button>
    </div>

    <!-- Tabel Pengguna -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Status</th>
                <th>Perner</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Role</th>
                <th>Unit</th>
                <th>Perusahaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                    <td>
                        <button class="action-btn">
                            <i class="fas fa-toggle-{{ $user->aktif == 1 ? 'on' : 'off' }}"></i>
                        </button>
                    </td>
                    <td>{{ $user->perner }}</td>
                    <td>{{ $user->nama_user }}</td>
                    <td>{{ $user->email_user }}</td>
                    <td>{{ ucfirst($user->role_user) }}</td>
                    <td>{{ $user->unit->nama_unit }}</td>
                    <td>{{ $user->unit->perusahaan->nama_perusahaan }}</td>
                    <td>
                        <button class="edit-btn" onclick="openEditPopup({{ $user->id_user }})">Edit</button>
                        <form action="{{ route('users.destroy', $user->id_user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div style="margin-top: 20px;">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Popup untuk Menambah Pengguna -->
<div class="popup-overlay" id="input-popup" onclick="closeInputPopup()">
    <div class="popup-content" onclick="event.stopPropagation()">
        <h3>Tambah Pengguna Baru</h3>
        <form id="data-form" method="POST" action="{{ route('users.insert') }}">
            @csrf
            <div>
                <label for="perner">Perner:</label><br>
                <input type="text" id="perner" name="perner" value="{{ old('perner') }}" required>
                @error('perner') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="nama_user">Nama Pengguna:</label><br>
                <input type="text" id="nama_user" name="nama_user" value="{{ old('nama_user') }}" required>
                @error('nama_user') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email_user">Email:</label><br>
                <input type="email" id="email_user" name="email_user" value="{{ old('email_user') }}" required>
                @error('email_user') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required>
                @error('password') <span style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="role_user">Role:</label><br>
                <select id="role_user" name="role_user" required>
                    <option value="admin" {{ old('role_user') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="manager" {{ old('role_user') == 'manager' ? 'selected' : '' }}>Manager</option>
                    <option value="user" {{ old('role_user') == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <div>
                <label for="id_unit">Unit:</label><br>
                <select id="id_unit" name="id_unit" required>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id_unit }}" {{ old('id_unit') == $unit->id_unit ? 'selected' : '' }}>{{ $unit->nama_unit }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" style="background-color: #27ae60; color: white;">Simpan</button>
                <button type="button" class="close-btn" onclick="closeInputPopup()">Tutup</button>
            </form>
        </div>
    </div>
</div>
<!-- Popup untuk Edit Pengguna -->
<div class="popup-overlay" id="edit-popup" onclick="closeEditPopup()">
    <div class="popup-content" onclick="event.stopPropagation()">
        <h3>Edit Pengguna</h3>
        <form id="edit-form" method="POST" action="{{ route('users.update', ['id_user' => ':id']) }}">
            @csrf
            @method('PUT') <!-- Pastikan metode PUT untuk update -->
            <input type="hidden" id="edit-id_user" name="id_user">

            <div>
                <label for="edit-perner">Perner:</label><br>
                <input type="text" id="edit-perner" name="perner" required>
            </div>
            <div>
                <label for="edit-nama_user">Nama Pengguna:</label><br>
                <input type="text" id="edit-nama_user" name="nama_user" required>
            </div>
            <div>
                <label for="edit-email_user">Email:</label><br>
                <input type="email" id="edit-email_user" name="email_user" required>
            </div>
            <div>
                <label for="edit-role_user">Role:</label><br>
                <select id="edit-role_user" name="role_user" required>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div>
                <label for="edit-id_unit">Unit:</label><br>
                <select id="edit-id_unit" name="id_unit" required>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id_unit }}">{{ $unit->nama_unit }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="edit-aktif">Aktif:</label><br>
                <input type="checkbox" id="edit-aktif" name="aktif" value="1">
            </div>
            <button type="submit" style="background-color: #27ae60; color: white;">Simpan</button>
            <button type="button" class="close-btn" onclick="closeEditPopup()">Tutup</button>
        </form>
    </div>
</div>


<script>
 function openInputPopup() {
    // Menutup modal edit jika terbuka
    document.getElementById('edit-popup').style.display = 'none';

    // Menampilkan modal tambah pengguna
    document.getElementById('input-popup').style.display = 'block';
}

function closeInputPopup() {
    // Menutup modal tambah pengguna
    document.getElementById('input-popup').style.display = 'none';
}

function openEditPopup(userId) {
        // Ambil data pengguna berdasarkan ID dan tampilkan di form
        // Ganti ID popup dengan 'edit-popup' jika diperlukan

        // Mendapatkan data pengguna berdasarkan ID (gunakan AJAX jika perlu)
        fetch(`/users/${userId}/edit`)
            .then(response => response.json())
            .then(data => {
                // Mengisi form dengan data pengguna yang akan diedit
                document.getElementById('edit-perner').value = data.perner;
                document.getElementById('edit-nama_user').value = data.nama_user;
                document.getElementById('edit-email_user').value = data.email_user;
                document.getElementById('edit-role_user').value = data.role_user;
                document.getElementById('edit-id_unit').value = data.id_unit;
                // document.getElementById('edit-aktif').checked = data.aktif == 1;

                // Menampilkan popup edit
                document.getElementById('edit-popup').style.display = 'block';
            })
            .catch(error => console.error('Error:', error));
    }

    function closeEditPopup() {
        document.getElementById('edit-popup').style.display = 'none';
    }

</script>
@endsection
