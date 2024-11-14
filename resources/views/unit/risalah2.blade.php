@extends('unit.layout.main')
@section('title', 'Risalah')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../../css/background.css">
<link rel="stylesheet" href="../../css/formUnit.css">
<link rel="stylesheet" href="../../css/upload.css">

<html>
<head>
    <title>Form Pengumpulan Risalah</title>
</head>
<body>
    <div class="container">
        <h1>DELTA RISALAH MANAGEMENT IMPROVEMENT</h1>

        <div class="form-group">
            <label for="unit">Unit</label>
            <input type="text" id="unit" name="unit">
        </div>

        <div class="form-group">
            <label for="group">Nama Grup</label>
            <input type="text" id="group" name="group">
        </div>

        <div class="form-group">
            <label for="pilih-langkah">Pilih Langkah</label>
            <select id="pilih-langkah" name="pilih-langkah">
                <option value="langkah1">Langkah 1</option>
                <option value="langkah2">Langkah 2</option>
                <option value="langkah3">Langkah 3</option>
                <option value="langkah4">Langkah 4</option>
                <option value="langkah5">Langkah 5</option>
                <option value="langkah6">Langkah 6</option>
                <option value="langkah7">Langkah 7</option>
                <option value="langkah8">Langkah 8</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal">
        </div>

        <div class="form-group">
            <label for="upload_file">Upload File</label>
            <input type="file" id="upload_file" name="upload_file" accept=".xls,.xlsx,.pdf">
        </div>

        <div>
            <button class="submit-btn">SUBMIT</button>
        </div>
    </div>
</body>
</html>

@endsection
