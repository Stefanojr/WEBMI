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

    </script>
</head>

<body>
    <div class="table-container">
        <h2>LIST PERUSAHAAN</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Perusahaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><button class="button-link" onclick="togglePopup(1)">Sido Muncul (SM)</button></td>
                    <td class="icon">
                        <a href="edit-link-1" class="edit-btn"><i class="fas fa-edit"></i></a>
                        <a href="delete-link-1" class="delete-btn"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><button class="button-link" onclick="togglePopup(2)">Semarang Herbal Indoplant (SHI)</button></td>
                    <td class="icon">
                        <a href="edit-link-2" class="edit-btn"><i class="fas fa-edit"></i></a>
                        <a href="delete-link-2" class="delete-btn"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><button class="button-link" onclick="togglePopup(3)">Sido Muncul Pupuk Nusantara (SMPN)</button></td>
                    <td class="icon">
                        <a href="edit-link-3" class="edit-btn"><i class="fas fa-edit"></i></a>
                        <a href="delete-link-3" class="delete-btn"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Popup 1 -->
    <!-- Popup 1 -->
<div class="popup-overlay" id="popup-1">
    <div class="popup-content">
        <h2>Detail Informasi Perusahaan: Sido Muncul</h2>
        <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sido Muncul</td>
                    <td>Unit Budidaya Tanaman</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sido Muncul</td>
                    <td>Unit Building</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sido Muncul</td>
                    <td>Unit Finance</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Alat Kebersihan & Tulis</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Bahan Baku Non Simplisia</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Bahan Baku Simplisia</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Bahan Baku Simplisia Bersih & For</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Bahan Pengemas</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Pengemas Jamu</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Produk Jadi</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Sido Muncul</td>
                    <td>Unit Humas</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Sido Muncul</td>
                    <td>Unit Information Technology</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Sido Muncul</td>
                    <td>Unit Lab Analisa</td>
                </tr>

                <tr>
                    <td>15</td>
                    <td>Sido Muncul</td>
                    <td>Unit Logistik</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pemastian Mutu</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pengawasan Mutu</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pengolahan Ekstrak</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pengolahan Kopi</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pengolahan Serbuk Jamu</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Sido Muncul</td>
                    <td>Unit Klinik</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Sido Muncul</td>
                    <td>Unit PPIC</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pra Pengolahan Bahan Baku Non Simplisia</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Sido Muncul</td>
                    <td>Unit Pra Pengolahan Bahan Baku Simplisia</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Cairan Obat Dalam</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi COD2</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Jamu Serbuk</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Makanan,Minuman Cair & Kosmetik</td>
                </tr>

                <tr>
                    <td>29</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Pil Klepu</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Sediaan Farmasi</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Serbuk Effervescent</td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Sido Muncul</td>
                    <td>Unit Produksi Serbuk Instant & Sediaan Pangan</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Sido Muncul</td>
                    <td>Unit Registrasi</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Sido Muncul</td>
                    <td>Unit Research & Development</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Sido Muncul</td>
                    <td>Unit Teknik</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Sido Muncul</td>
                    <td>Unit Uji Farmakologi</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - Telekomunikasi</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Sido Muncul</td>
                    <td>Unit COD Botol</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - Satpam</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - Rumah Tangga</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - Advertising</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - Angkutan</td>
                </tr>

                <tr>
                    <td>43</td>
                    <td>Sido Muncul</td>
                    <td>Unit General Affair - K3</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>Sido Muncul</td>
                    <td>Unit HR-BP - Social Relation</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>Sido Muncul</td>
                    <td>Unit Gudang Grabahan dan Bahan Baku</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>Sido Muncul</td>
                    <td>Unit IPA</td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>Sido Muncul</td>
                    <td>Unit HR-BP - Payroll</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>Sido Muncul</td>
                    <td>Unit HR-BP - People Development</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>Sido Muncul</td>
                    <td>Unit HR-BP - Recruitment</td>
                </tr>

            </tbody>
        </table>
        <button class="close-btn" onclick="togglePopup(1)">Tutup</button>
    </div>
</div>
</div>

<!-- Popup 2 -->
<div class="popup-overlay" id="popup-2">
    <div class="popup-content">
        <h2>Detail Informasi Perusahaan: SHI</h2>
        <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SHI</td>
                    <td>Unit Produksi Ekstrak</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SHI</td>
                    <td>Unit Produksi Bio Etanol</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SHI</td>
                    <td>Unit Produksi Minyak Atsiri</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>SHI</td>
                    <td>Unit HRGA</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>SHI</td>
                    <td>Unit R&D</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SHI</td>
                    <td>Unit QC</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>SHI</td>
                    <td>Unit QA</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>SHI</td>
                    <td>Unit Teknik</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>SHI</td>
                    <td>Unit Gudang</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>SHI</td>
                    <td>Unit Lingkungan dan K3</td>
                </tr>
            </tbody>
        </table>
        <button class="close-btn" onclick="togglePopup(2)">Tutup</button>
    </div>
</div>
</div>

<!-- Popup 3 -->
<div class="popup-overlay" id="popup-3">
    <div class="popup-content">
        <h2>Detail Informasi Perusahaan: SMPN</h2>
        <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SMPN</td>
                    <td>Unit Gudang</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SMPN</td>
                    <td>Unit Pupuk Organic Granul (POG)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SMPN</td>
                    <td>Unit Pupuk Organic Cair (POC)</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>SMPN</td>
                    <td>Unit QC</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>SMPN</td>
                    <td>Unit R&D</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SMPN</td>
                    <td>Unit QC</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>SMPN</td>
                    <td>Unit Legal, Multimedia & Operational Support</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>SMPN</td>
                    <td>Unit HRGA</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>SMPN</td>
                    <td>Unit Finance & Accounting</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>SMPN</td>
                    <td>Unit Marketing</td>
                </tr>
            </tbody>
        </table>
        <button class="close-btn" onclick="togglePopup(3)">Tutup</button>
    </div>
</div>
</div>

</body>

@endsection
