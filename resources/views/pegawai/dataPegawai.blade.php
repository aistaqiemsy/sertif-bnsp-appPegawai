<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="../../asset/bootstrap.css">
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

<div class="card">
  <div class="card-header">
    Selamat Datang
  </div>
  <div class="card-body">
    <h5 class="card-title"> Nama Pengguna!</h5>
    <p class="card-text"><i>Di halaman ini anda bisa melakukan pengolahan data pegawai SMK Wikrama 1 Garut</i></p>
  </div>
</div>
<br>

<center>
<h5 class="card-title">DAFTAR PEGAWAI SMK WIKRAMA 1 GARUT</h5><br>
</center>
<div class="container-sm">
  <p align = "right">
    <a href="/pegawai/formTambahPegawai">
      <button type="button" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
          <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
        </svg>
        Tambah Pegawai
      </button>
    </a>
  </p>
</div>

    <div class="container-md">
    <div class="card">
        <div class="card-body">
        
            <table class="table table-striped table-hover">
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Jabatan</td>
                    <td>NIP</td>
                    <td>Ket.</td>
                </tr>
                  @foreach ( $dataPegawai as $pegawai )
                  <tr>                    
                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $pegawai->nama }} </td>
                    <td> {{ $pegawai->jabatan }} </td>
                    <td> {{ $pegawai->nip }} </td>
                    <td>
                      <a href="/pegawai/formPerbarui/{{$pegawai->id}}">
                        <button type="button" class="btn btn-outline-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                          Perbarui
                        </button>
                      </a>
                      <a href="/pegawai/hapusPegawai/{{$pegawai->id}}">
                        <button type="button" class="btn btn-outline-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                          </svg>
                          Hapus
                        </button>
                      </a>
                      <button type="button" class="btn btn-outline-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                          <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                          <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                          </svg>
                        Selengkapnya
                      </button>
                    </td>
                  </tr>
                  @endforeach  
            </table>

        </div>
    </div>
    </div>
</body>
</html>