<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbarui Data Pegawai</title>
    <link rel="stylesheet" href="../../asset/bootstrap.css">
    <script src="../../js/form-validasi.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a href="/pegawai/beranda"><span class="badge text-bg-primary">Beranda</span></a>
        </li>
        <li class="nav-item">
        <a href="/pegawai/dataPegawai"><span class="badge text-bg-primary">Data Pegawai</span></a>
        </li>
        <li class="nav-item">
        <a href="/tentang"><span class="badge text-bg-primary">Tentang</span></a>
        </li>
        <li class="nav-item">
          <a href="/"><span class="badge text-bg-light">Keluar</span></a>
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
                    </div>
                </div>

                <div class="container-sm">
                    <p align = "center">
                        <button type="submit" class="btn btn-success">
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