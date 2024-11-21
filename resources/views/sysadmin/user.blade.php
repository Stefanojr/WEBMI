@extends('sysadmin.layout.main')
@section('title', 'Dashboard')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Perusahaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../css/background.css">
    <link rel="stylesheet" href="../../css/tableManagUser.css">

    <script>
        // Function to toggle the popup
        function togglePopup(id) {
            const popup = document.getElementById(`popup-${id}`);
            if (popup.style.display === 'block') {
                popup.style.display = 'none';
            } else {
                popup.style.display = 'block';
            }
        }

        function toggleAction(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('fa-toggle-off')) {
                icon.classList.remove('fa-toggle-off');
                icon.classList.add('fa-toggle-on');
            } else {
                icon.classList.remove('fa-toggle-on');
                icon.classList.add('fa-toggle-off');
            }
        }

        function openInputPopup() {
            document.getElementById('input-popup').style.display = 'block';
        }

        function closeInputPopup() {
            document.getElementById('input-popup').style.display = 'none';
        }

        document.getElementById('data-form').addEventListener('submit', function (e) {
            e.preventDefault();

            // Ambil data dari form
            const no = document.getElementById('no').value;
            const perner = document.getElementById('perner').value;
            const user = document.getElementById('user').value;
            const email = document.getElementById('email').value;
            const role = document.getElementById('role').value;
            const unit = document.getElementById('unit').value;
            const perusahaan = document.getElementById('perusahaan').value;
            const lastLogin = document.getElementById('lastLogin').value;

            // Tambahkan baris ke tabel
            const table = document.querySelector('.table-container table tbody');
            const row = table.insertRow();
            row.innerHTML = `
                <td>${no}</td>
                <td class="icon">
                    <button class="action-btn" onclick="toggleAction(this)">
                        <i class="fas fa-toggle-off"></i>
                    </button>
                </td>
                <td>${perner}</td>
                <td>${user}</td>
                <td>${email}</td>
                <td>${role}</td>
                <td>${unit}</td>
                <td>${perusahaan}</td>
                <td>${lastLogin}</td>
            `;

            // Reset form dan tutup popup
            e.target.reset();
            closeInputPopup();
        });
    </script>
</head>

<body>
    <div class="table-container">
        <h2>LIST USER</h2>
        <div style="text-align: center; margin-bottom: 20px;">
            <button class="input-data-btn" onclick="openInputPopup()">+ Tambah User</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Aktif</th>
                    <th>Perner</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Unit</th>
                    <th>Perusahaan</th>
                    <th>Last Login</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data tabel -->
            </tbody>
        </table>
    </div>

    <div class="popup-overlay" id="input-popup">
        <div class="popup-content">
            <!-- Judul Popup -->
            <h3>Tambah Data Pengguna</h3>
            <form id="data-form">
                <div style="margin-bottom: 15px;">
                    <label for="no">No:</label><br>
                    <input type="text" id="no" name="no" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="perner">Perner:</label><br>
                    <input type="text" id="perner" name="perner" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="user">User:</label><br>
                    <input type="text" id="user" name="user" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="role">Role:</label><br>
                    <input type="text" id="role" name="role" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="unit">Unit:</label><br>
                    <input type="text" id="unit" name="unit" required>
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="perusahaan">Perusahaan:</label><br>
                    <input type="text" id="perusahaan" name="perusahaan" required>
                </div>

                <button type="submit" style="background-color: #59915b; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px;">
                Submit
                </button>
                <button type="button" class="close-btn" onclick="closeInputPopup()">Tutup</button>
            </form>
        </div>
    </div>

</body>

@endsection
