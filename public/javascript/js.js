// JS untuk konfirmasi log out atau keluar
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("logout-button").addEventListener("click", function (event) {
        event.preventDefault();
        
        if (confirm("Apakah Anda yakin ingin logout?")) {
            document.getElementById("logout-form").submit();
        }
    });
});

// JS hanya menerima input huruf dan spasi
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("namaPegawai").addEventListener("input", function () {
        let namaInput = this.value;
        let errorElement = document.getElementById("error-nama");

        // Cek apakah input hanya mengandung huruf dan spasi
        if (/^[A-Za-z\s]*$/.test(namaInput)) {
            errorElement.textContent = ""; // Hilangkan pesan error jika valid
        } else {
            errorElement.textContent = "Hanya boleh huruf dan spasi!";
            this.value = namaInput.replace(/[^A-Za-z\s]/g, ""); // Hapus karakter yang tidak diinginkan
        }
    });
});

//JS hanya menerima angka
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".only-numbers").forEach(function (input) {
        input.addEventListener("nipPegawai", function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
});

//JS nip hanya maks. 8 angka
document.addEventListener("DOMContentLoaded", function () {
    let inputField = document.getElementById("nipPegawai");
    let form = document.getElementById("formPegawai");
    let errorMessage = document.getElementById("error-message");

    inputField.addEventListener("input", function (event) {
        // Hanya izinkan angka dan batasi panjang input hingga 8 digit
        this.value = this.value.replace(/\D/g, "").slice(0, 8);
            event.preventDefault();
            errorMessage.style.display = "block";
    });

    form.addEventListener("submit", function (event) {
        if (inputField.value.length > 8) {
            event.preventDefault();
            errorMessage.style.display = "block";
        } else {
            errorMessage.style.display = "none";
        }
    });
});






