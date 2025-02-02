function validasiForm() {
    var nama = document.getElementById("namaPegawi").value;
    var jabatan = document.getElementById("jabatanPegawi").value;
    var nip = document.getElementById("nipPegawi").value;

    if (nama == "" || jabatan == "" || nip == "") {
        alert("Semua field harus diisi!");
        return false;
    }

    if (!/^[a-zA-Z ]+$/.test(nama)) {
        alert("Nama hanya boleh mengandung huruf!");
        return false;
    }

    if (!/^[a-zA-Z ]+$/.test(jabatan)) {
        alert("Jabatan hanya boleh mengandung huruf!");
        return false;
    }

    if (nip.length < 8) {
        alert("NIP tidak valid!");
        return false;
    }

    return true;
}
