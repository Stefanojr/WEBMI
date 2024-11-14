@extends('unit.layout.main')
@section('title', 'Risalah')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../css/background.css">
    <link rel="stylesheet" href="../../css/formTime.css">

</head>
<body>

    <div class="container">
        <h2>FORM TIME TABLE</h2>
        <form>
            <div class="form-group">
                <label for="noInput">Langkah ke</label>
                <input type="text" id="noInput" disabled> <!-- Input yang akan terisi otomatis -->
            </div>
            <div class="form-group">
                <label for="faseInput">Fase</label>
                <input type="text" id="faseInput" disabled> <!-- Fase yang akan terisi otomatis -->
            </div>
            <div class="form-group">
                <label for="fase">Kegiatan</label>
                <select id="kegiatan" onchange="updateInput()">
                    <option value="" disabled selected>Pilih Kegiatan</option>
                    <option value="Menentukan Masalah Utama">(1) Menentukan Masalah Utama</option>
                    <option value="Mencari Sebab Masalah (Analisa Data)">(2) Mencari Sebab Masalah (Analisa Data)</option>
                    <option value="Mencari Sebab Dominan">(3) Mencari Sebab Dominan</option>
                    <option value="Menyusun Rencana Perbaikan">(4) Menyusun Rencana Perbaikan</option>
                    <option value="Melakukan Perbaikan">(5) Melakukan Perbaikan</option>
                    <option value="Memeriksa Hasil Perbaikan">(6) Memeriksa Hasil Perbaikan</option>
                    <option value="Standarisasi">(7) Standarisasi</option>
                    <option value="Menentukan Rencana Berikutnya">(8) Menentukan Rencana Berikutnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggalAwal">Rencana Pelaksanaan Awal</label>
                <input type="date" id="tanggalAwal" name="tanggalAwal" required>
            </div>
            <div class="form-group">
                <label for="tanggalAwal">Rencana Pelaksanaan Akhir</label>
                <input type="date" id="tanggalAwal" name="tanggalAwal" required>
            </div>
            <div class="section-title">INDIKATOR TIME TABLE</div>
            <div class="form-group">
                <label for="plan">Planning</label>
                <input type="text" id="plan" name="plan" required>
            </div>
            <div class="form-group">
                <label for="real">Realisasi</label>
                <input type="text" id="real" name="real" required>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn">SUBMIT</button>
            </div>
        </form>
    </div>
    <script>
        function updateInput() {
            // Ambil nilai dropdown
            var selectedValue = document.getElementById("kegiatan").value;

            // Set nilai input berdasarkan pilihan dropdown
            if (selectedValue === "Menentukan Masalah Utama") {
                document.getElementById("noInput").value = "1"; // Set input No. menjadi 1
                document.getElementById("faseInput").value = "Plan"; // Set fase menjadi "Plan"
            } else if (selectedValue === "Mencari Sebab Masalah (Analisa Data)") {
                document.getElementById("noInput").value = "2"; // Set input No. menjadi 2
                document.getElementById("faseInput").value = "Plan"; // Set fase menjadi "Plan"
            } else if (selectedValue === "Mencari Sebab Dominan") {
                document.getElementById("noInput").value = "3"; // Set input No. menjadi 3
                document.getElementById("faseInput").value = "Plan"; // Set fase menjadi "Plan"
            } else if (selectedValue === "Menyusun Rencana Perbaikan") {
                document.getElementById("noInput").value = "4"; // Set input No. menjadi 4
                document.getElementById("faseInput").value = "Plan"; // Set fase menjadi "Plan"
            } else if (selectedValue === "Melakukan Perbaikan") {
                document.getElementById("noInput").value = "5"; // Set input No. menjadi 5
                document.getElementById("faseInput").value = "Do"; // Set fase menjadi "Do"
            } else if (selectedValue === "Memeriksa Hasil Perbaikan") {
                document.getElementById("noInput").value = "6"; // Set input No. menjadi 6
                document.getElementById("faseInput").value = "Check"; // Set fase menjadi "Check"
            } else if (selectedValue === "Standarisasi") {
                document.getElementById("noInput").value = "7"; // Set input No. menjadi 7
                document.getElementById("faseInput").value = "Check"; // Set fase menjadi "Check"
            } else if (selectedValue === "Menentukan Rencana Berikutnya") {
                document.getElementById("noInput").value = "8"; // Set input No. menjadi 8
                document.getElementById("faseInput").value = "Act"; // Set fase menjadi "Act"
            } else {
                document.getElementById("noInput").value = ""; // Kosongkan input No.
                document.getElementById("faseInput").value = ""; // Kosongkan fase
            }
        }
    </script>
</body>
</html>
@endsection

