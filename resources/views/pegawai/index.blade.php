<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
    <link rel="stylesheet" href="../../asset/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/pegawai/beranda">
            <span class="badge text-bg-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
              </svg>  
            </span>
          </a>
        </li>
         
      </ul>
      <a href="/tentang"><span class="badge text-bg-primary">Tentang</span></a>
      <a href="/"><span class="badge text-bg-light">Keluar</span></a>
    </div>
  </div>
</nav>
<br>
<div class="container-sm">
<div class="card">
  <div class="card-header">
    <center>
    Halaman Autentikasi
    </center>  
  </div>
  <div class="card-body">
    <form action="/autentikasi" method="get">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
        <input type="text" name="pengguna" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama pengguna anda">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" name="sandi" class="form-control" id="exampleInputPassword1" placeholder="Masukan kata sandi anda">
      </div>
      <button type="submit" class="btn btn-outline-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
        </svg>
        Masuk
      </button>
    </form>
  </div>
</div>
</div>

<!-- <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">

        <button type="button" class="btn btn-outline-primary">
          <a href="/pegawai/dataPegawai">
            <span class="badge text-bg-primary">Data Pegawai</span>
          </a>
      </button>
    </div>
  </div>
</div> -->

</body>
</html>