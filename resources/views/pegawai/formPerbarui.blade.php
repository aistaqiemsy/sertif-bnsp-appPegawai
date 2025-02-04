<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Data Pegawai</title>
    <link rel="stylesheet" href="../../asset/bootstrap.css">
    <script src="../../js/form-validasi.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
<!-- kode JS untuk validasi atau konfirmasi -->
<script src="../../javascript/js.js"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <!-- <a href="/pegawai/beranda"> -->
            <a href="/">
            <button type="button" class="btn btn-outline-info">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
              </svg>  
              Beranda
            </button>
          </a>
        </li>
        <li class="nav-item">
        <a href="/pegawai/dataPegawai">
        <button type="button" class="btn btn-outline-info">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
          </svg>  
              Pegawai
            </button>     
        </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<center>
<h5 class="card-title">PEMBARUAN DATA PEGAWAI SMK WIKRAMA 1 GARUT</h5><br>
</center>
    <div class="container-md">
        <div class="card">
            <form action="/pegawai/simpanPembaruan/{{ $idPegawai }}" method="post"  onsubmit="return validasiForm()">
            @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" id="namaPegawai" name="namaPegawai" class="form-control" id="exampleFormControlInput1" placeholder="{{ $namaPegawai }}" value="{{ $namaPegawai }}">
                        <label id="namaStatus"></label>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatanPegawai" name="jabatanPegawai" aria-label="Default select example">
                        <option selected value="{{ $jabatanPegawai }}">{{ $jabatanPegawai }}</option>
                        <option value="Head Office">Head Office</option>
                        <option value="Vice Office">Vice Office</option>
                        <option value="Staff">Staff</option>
                        <option value="Mentor">Mentor</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIP</label>
                        <input type="number" id="nipPegawai" name="nipPegawai" class="form-control" id="exampleFormControlInput1" placeholder="{{ $nipPegawai }}" value="{{ $nipPegawai }}">
                        <label id="nipStatus"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="text" id="alamatPegawai" name="alamatPegawai" class="form-control" id="exampleFormControlInput1" placeholder="{{ $alamatPegawai }}" value="{{ $alamatPegawai }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor HP</label>
                        <input type="number" id="hpPegawai" name="hpPegawai" class="form-control" id="exampleFormControlInput1" placeholder="{{ $hpPegawai }}" value="{{ $hpPegawai }}">
                        <label id="hpStatus"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gaji</label>
                        <input type="number" id="gajiPegawai" name="gajiPegawai" class="form-control" id="exampleFormControlInput1" placeholder="{{ $gajiPegawai }}" value="{{ $gajiPegawai }}">
                    </div>
                </div>

                <div class="container-sm">
                    <p align = "center">
                        <button id="btnPerbaruiPegawai" type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                            </svg>
                            Perbarui Data Pegawai
                        </button>
                        </a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>
</html>