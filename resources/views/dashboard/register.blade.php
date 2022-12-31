<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<link href="{{asset('assets/img/Logo.png')}}" rel="icon">
    <title>PPDB WIKRAMA</title>
</head>

<body style="background:yellow;" >

<div class="hero carousel-item active" style="background-image: url(assets/img/gedungwikrama.jpg)">
<div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
<div class="card p-5">
    <div class="text-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    
    @endif
        <h5>Form Pendaftaran PPDB</h5>
        <h6 class="text-muted">SMK Wikrama Bogor TP.2023-2024</h6>
    </div><br>
        <form method="POST" action="{{route('ppdb.store')}}">
            @csrf
        <div class="row mb-3">
        <div class="col-6">
        <label for="" class="form-label mb-1">NISN</label>
        <input class="form-control" placeholder="Masukan NISN" type="text" name="nisn">
    </div>
    <div class="col-6">
        <label for="" class="form-label mb-1">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
        <option value="perempuan">Perempuan</option>
        <option value="laki_laki">Laki-Laki</option>
        </select>
    </div>
    </div>   
    <div class="mb-3">
        <label for="" class="form-label mb-1">Nama</label>
        <input class="form-control" placeholder="Masukkan Nama Lengkap" type="text" name="nama">
    </div>
    <div class="mb-3">
        <label for="" class="form-label mb-1">Asal Sekolah</label>
        <select class="selectpicker form-control" aria-label="Default select example" id="sekolah" onchange="tampilLainnya()" data-live-search="true" name="asal_sekolah">
        <option selected>Pilih Asal Sekolah</option>
        <option value="SMP NEGERI 1 BOGOR">SMP NEGERI 1 BOGOR</option>
        <option value="SMP NEGERI 2 BOGOR">SMP NEGERI 2 BOGOR</option>
        <option value="SMP NEGERI 3 BOGOR">SMP NEGERI 3 BOGOR</option>
        <option value="SMP NEGERI 1 CIAWI">SMP NEGERI 1 CIAWI</option>
        <option value="SMP NEGERI 2 CIAWI">SMP NEGERI 2 CIAWI</option>
        <option value="SMP NEGERI 3 CIAWI">SMP NEGERI 3 CIAWI</option>
        <option value="SMP NEGERI 1 CISARUA">SMP NEGERI 1 CISARUA</option>
        <option value="SMP NEGERI 2 CISARUA">SMP NEGERI 2 CISARUA</option>
        <option value="SMP NEGERI 3 CISARUA">SMP NEGERI 3 CISARUA</opti<option value="SMP NEGERI 1 CIAWI">SMP NEGERI 1 CIAWI</option>
        <option value="MTS FATHAN MUBINA">MTS FATHAN MUBINA</option>
        <option value="MTS IBU">MTS KASIH IBU</option>on>

        <option value="lainnya">LAINNYA</option>
        </select>
    </div>
    <div class="mb-3" id="sekolahlainnya" style="display: none;">
        <label for="" class="form-label mb-1">Asal Sekolah</label>
        <input class="form-control" placeholder="Masukkan Asal Sekolah" type="text" name="sekolah_lainnya">
    </div>
    <script>
        function tampilLainnya() {
            var sekolah = document.getElementById("sekolah").value;
            var sekolahLainnya = document.getElementById("sekolahlainnya");
            if (sekolah == "lainnya") {
                sekolahLainnya.style.display = "";
            }else {
                sekolahLainnya.style.display = "none";
            }
        }
    </script>
    <div class="mb-3">
        <label for="" class="form-label mb-1">Email</label>
        <input class="form-control" placeholder="Masukkan Email Aktif" type="email" name="email">
    </div>
    <div class="mb-3 ">
        <label for="" class="form-label mb-1">Nomor Handphone</label>
        <input class="form-control" placeholder="Contoh : 08-----" type="number" name="no_hp">
    </div>
    <div class="row mb-4">
        <div class="col">
            <label for="" class="form-label mb-1">Nomor HP Ayah</label>
            <input type="number" class="form-control" placeholder="Contoh : 08-----" aria-label="angka1" name="no_ayah">
        </div>
        <div class="col">
            <label for="" class="form-label mb-1">Nomor HP Ibu</label>
             <input type="number" class="form-control" placeholder="Contoh : 08-----" aria-label="angka2" name="no_ibu">
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label mb-1">Pilih Referensi</label>
        <select class="form-select" aria-label="Default select example" id="refrensi" onchange="tampilRefrensi()" name="refrensi">
            <option selected>Pilih Referensi</option>
            <option value="pegawai">Guru/Staff/Laboran/Pegawai Wikrama</option>
            <option value="siswa">Siswa SMK Wikrama</option>
            <option value="alumni">Alumni SMK Wikrama</option>
            <option value="gurusmp">Guru SMP</option>
            <option value="calon">Calon Siswa SMK Wikrama</option>
            <option value="sosialMedia">Sosial Media</option>
            <option value="refrensiLangsung">Refrensi Langsung</option>
           
           
        </select>
    </div>
    <div id="refrensipegawai" style="display: none;">
    <div class="mb-3" >
        <span class="fw-bold">Referensi dari Guru/Staf/Laboran/Pegawai Wikrama</span><br>
        <label for="" class="form-label mb-0">Nama Guru/Staf/Laboran/Pegawai Wikrama</label>
        <input class="form-control mb-2" placeholder="" type="text" name="nama_pegawai">
    </div>
    </div>
    <div id="refrensiSiswa" style="display: none;">
    <div class="mb-3" >
        <span class="fw-bold">Referensi dari Siswa Wikrama</span><br>
        <label for="" class="form-label mb-0">Nama Siswa</label>
        <input class="form-control mb-2" placeholder="" type="text" name="nama_siswa">

        <label for="" class="form-label mb-1">Rayon</label>
        <select class="form-select" aria-label="Default select example" name="rayon">
        <option value="cib1">Cibedug 1</option>
        <option value="cib2">Cibedug 2</option>
        </select>
    </div>
    </div>
    <div id="refrensialumni" style="display: none;">
    <div class="mb-3" >
        <span class="fw-bold">Referensi dari Alumni Wikrama</span><br>
        <label for="" class="form-label mb-0">Nama Alumni</label>
        <input class="form-control mb-2" placeholder="" type="text" name="nama_alumni">
   
        <label for="" class="form-label mb-0">Tahun Lulus Alumni</label>
        <input class="form-control" placeholder="" type="number" name="tahun_lulus">
    </div>
    </div>
    <div id="refrensigurusmp" style="display: none;">
    <div class="mb-3" >
        <span class="fw-bold">Referensi dari Guru SMP</span><br>
        <label for="" class="form-label mb-0">Nama Guru</label>
        <input class="form-control mb-2" placeholder="" type="text" name="nama_guru">
        <label for="" class="form-label mb-0">Asal SMP</label>
        <input class="form-control" placeholder="" type="text" name="asal_smp">
    </div>
    </div>
    <div id="refrensicalon" style="display: none;">
    <div class="mb-3" >
        <span class="fw-bold">Referensi dari Calon Peserta Didik</span><br>
        <label for="" class="form-label mb-0">No Seleksi</label>
        <input class="form-control" placeholder="" type="number" name="no_seleksi">
        <label for="" class="form-label mb-0">Nama Calon Peserta</label>
        <input class="form-control" placeholder="" type="text" name="nama_calon">
    </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-warning me-md-2" type="submit">REGISTRASI</button>
    <a href="/" class="btn btn-dark" type="button">KEMBALI</a>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<script>
        function tampilRefrensi() {
            var refrensi = document.getElementById("refrensi").value;
            var refrensiAlumni = document.getElementById("refrensialumni");
            var refrensiPegawai = document.getElementById("refrensipegawai");
            var refrensiSiswa = document.getElementById("refrensiSiswa");
            var refrensiGuruSMP = document.getElementById("refrensigurusmp");
            var refrensiCalon = document.getElementById("refrensicalon");
            if (refrensi == "alumni") {
                refrensiAlumni.style.display = "";
            }else {
                refrensiAlumni.style.display = "none";
            }
            if (refrensi == "pegawai") {
                refrensiPegawai.style.display = "";
            }else {
                refrensiPegawai.style.display = "none";
            }
            if (refrensi == "siswa") {
                refrensiSiswa.style.display = "";
            }else {
                refrensiSiswa.style.display = "none";
            }
            if (refrensi == "gurusmp") {
                refrensiGuruSMP.style.display = "";
            }else {
                refrensiGuruSMP.style.display = "none";
            }
            if (refrensi == "calon") {
                refrensiCalon.style.display = "";
            }else {
                refrensiCalon.style.display = "none";
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

</body>
</html>