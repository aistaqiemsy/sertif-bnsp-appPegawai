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
        // Hanya izinkan angka dan batasi panjang input hingga 5 digit
        this.value = this.value.replace(/\D/g, "").slice(0, 5);
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

//untuk dokumen update pegawai
// bila nama dan nip belum input
// maka button tidak bisa di tekan

$(document).ready(function(){
    let btnPerbarui = $('#btnPerbaruiPegawai'); // var dengan mengambil id dari button
    btnPerbarui.prop('disabled', true);

    // handle nama, jabatan, nip, alamat, hp, gaji
    $('#namaPegawai').on('keyup', function() {
        let nama = $(this).val().trim();
        let ket = $('#namaStatus');

        if ( nama.length == '' | nama.length < 3 ) { // bila nama kosong dan huruf kurang dari 3, matikan tombol
            ket.html('<span style="color:red;">Nama tidak valid!</span>');
            btnPerbarui.prop('disabled', true); 
        } else {
            ket.html('<span style="color:red;"></span>');
            btnPerbarui.prop('disabled', false); 
        }
    });

    $('#jabatanPegawai').on('keyup', function() {
        btnPerbarui.prop('disabled', false); 
    });

    $('#nipPegawai').on('keyup', function() {
        btnPerbarui.prop('disabled', false); 
    });

    $('#alamatPegawai').on('keyup', function() {
        btnPerbarui.prop('disabled', false); 
    });

    $('#hpPegawai').on('keyup', function() {
        let hp = $(this).val().trim();
        let ket = $('#hpStatus');
        let regex = /^(08|\+62)\d{8,13}$/;

        if (regex.test(hp)) {
            ket.html('<span style="color:green;">Nomor valid</span>');
            btnPerbarui.prop('disabled', false);

            // Kirim AJAX ke Laravel jika ingin validasi di backend
            // $.ajax({
            //     url: '/cek-nomor-hp',
            //     type: 'GET',
            //     data: { phone: phone },
            //     success: function(response) {
            //         if (response.exists) {
            //             statusMsg.html('<span style="color:red;">Nomor sudah terdaftar</span>');
            //             submitBtn.prop('disabled', true);
            //         }
            //     }
            // });

        } else if (hp.length == '') {
            ket.html('<span style="color:red;">Nomor tidak boleh kosong</span>');
            btnPerbarui.prop('disabled', true);
        } else if (hp.length > 13 && hp.length < 10) {
            ket.html('<span style="color:red;">Nomor tidak valid!</span>');
            btnPerbarui.prop('disabled', true);
        } else {
            ket.html('<span style="color:red;">Nomor harus dimulai dengan 08 atau +62 dan minimal 10 angka</span>');
            btnPerbarui.prop('disabled', true);
        }

        btnPerbarui.prop('disabled', false); 
    });

    $('#gajiPegawai').on('keyup', function() {
        btnPerbarui.prop('disabled', false); 
    });
});

//untuk dokumen tambah pegawai
// bila nama dan nip belum input
// maka button tidak bisa di tekan
$(document).ready(function(){
    let btnTambah = $('#btnTambahPegawai'); // var dengan mengambil id dari button
    btnTambah.prop('disabled', true);
    
    $('#namaPegawai').on('keyup', function() {
        let nama = $(this).val();
        if ( nama.length >= 3 ) {
            // btnTambah.prop('disabled', false);

                $('#nipPegawai').on('keyup', function(){
                    let nip = $(this).val();
                    if ( nip.length == 5) { // jika nip sudah 5 digit, cek di database. sudah ada ?
                        $.ajax({
                            url: '/pegawai/nipCek',
                            type: 'GET',
                            data: { nip: nip },
                            success: function(response) {
                                if(response.ada) {
                                    $('#nipStatus').html('<span style="color:red;"><i>NIP ini sudah digunakan. Ganti dengan NIP lain!</i></span>');
                                    btnTambah.prop('disabled', true);
                                } else {
                                    $('#nipStatus').html('<span style="color:green;"><i>NIP ini bisa digunakan</i></span>');
                                    btnTambah.prop('disabled', false);
                                }
                            }
                        });

                        btnTambah.prop('disabled', false);  
                    } else if ( nip.length < 5 | nip.length == '' ) { 
                        btnTambah.prop('disabled', true);
                        $('#nipStatus').html('');
                    }
                });

        } else if (nama.length >= "") {
            btnTambah.prop('disabled', true);
        }
    });
});






