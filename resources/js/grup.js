window.addGrup = function() {
    console.log("addGrup dipanggil");
    var jabatan = document.querySelector('[name="grup_temp[jabatan_grup]"]').value;
    var perner = document.querySelector('[name="grup_temp[perner]"]').value;
    var nama = document.querySelector('[name="grup_temp[nama]"]').value;
    var fotoInput = document.querySelector('[name="grup_temp[foto]"]');
    var foto = fotoInput.files[0];

    // Validasi input
    if (!jabatan || !perner || !nama) {
        alert("Semua kolom harus diisi!");
        return;
    }

    // Data grup ditambahkan ke tabel
    var tableBody = document.getElementById("grup-table-body");
    var newRow = `
        <tr>
            <td>${jabatan}</td>
            <td>${perner}</td>
            <td>${nama}</td>
            <td>${foto ? foto.name : 'Tidak ada foto'}</td>
            <td><button type="button" onclick="removeGrup()">Hapus</button></td>
        </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', newRow);
};
