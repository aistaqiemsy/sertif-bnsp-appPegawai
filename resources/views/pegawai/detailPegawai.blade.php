<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai</title>
    <link rel="stylesheet" href="../../asset/bootstrap.css">
</head>
<body>

<div class="card text-center">
  <div class="card-header">
    <h5 class="card-title">PROFIL PEGAWAI</h5>
  </div>
  <div class="card-body">
  <div class="container-sm">
  <table>
        <tr align="left">
            <td width="150">Nama</td>
            <td>:</td>
            <td>{{ $namaPegawai }}</td>
        </tr>
        <tr align="left">
            <td>Jabatan</td>
            <td>:</td>
            <td>{{ $jabatanPegawai }}</td>
        </tr>
        <tr align="left">
            <td>NIP</td>
            <td>:</td>
            <td>{{ $nipPegawai }}</td>
        </tr>
        <tr align="left">
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamatPegawai }}</td>
        </tr>
        <tr align="left">
            <td>HP</td>
            <td>:</td>
            <td>{{ $hpPegawai }}</td>
        </tr>
        <tr align="left">
            <td>Gaji</td>
            <td>:</td>
            <td>Rp. {{ number_format($gajiPegawai) }}</td>
        </tr>
    </table>
  </div>
<br>
    <a href="/pegawai/formPerbarui/{{$idPegawai}}">
        <button type="button" class="btn btn-outline-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
            Perbarui Data
        </button>
    </a>
    
    <a href="/pegawai/dataPegawai">
        <button type="button" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skip-backward-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M11.729 5.055a.5.5 0 0 0-.52.038L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.271-.445"/>
        </svg>
            Kembali
        </button>
    </a>
  </div>
  <div class="card-footer text-body-secondary">
  </div>
</div>

</body>
</html>