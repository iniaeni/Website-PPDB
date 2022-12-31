@extends('layout')

@section('content')
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/ppdb/student">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  @if(Auth::user()->role == 'admin')
  <li class="nav-item">
    <a class="nav-link " href="/ppdb/verifikasi">
        <i class="bi bi-journal-text"></i>
      <span>Pembayaran</span>
    </a>
  </li>
  @else
  <li class="nav-item">
    <a class="nav-link " href="/ppdb/pembayaran">
        <i class="bi bi-journal-text"></i>
      <span>Pembayaran</span>
    </a>
  </li>
  @endif
    </ul>
  </li><!-- End Components Nav -->

</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
    <h1>Student</h1>
  <nav>
    <ol class="breadcrumb">

      <li class="breadcrumb-item"><a href="/ppdb/pembayaran">Dashboard</a></li>
      <li class="breadcrumb-item active">Pembayaran</li>

    </ol>
  </nav>
</div>

<section class="section dashboard">
 
    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>

        </div>

        @if (!isset($item))
       <div class="card">
            <div class="card-body">
                
              <h5 class="card-title mb-0">Form Pembayaran</h5>
              <p>Silahkan upload bukti pembayaran Anda di form berikut</p>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
              <!-- Browser Default Validation -->
              <form class="row g-3" method="POST" action="{{route('ppdb.create-pembayaran')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Nama Bank</label>
                  <select name="bank" class="selectpicker form-select " aria-label="Default select example"   data-live-search="true" onchange="tampilBank()" id="bank">
                    <option selected>Pilih Bank</option>
                    <option value="BRI">BANK RAKYAT INDONESIA</option>
                    <option value="MANDIRI">BANK MANDIRI</option>
                    <option value="BNI">BANK NEGARA INDONESIA</option>
                    <option value="SYARIAH">BANK SYARIAH</option>
                    <option value="BCA">BANK CENTRAL ASIA</option>
                    <option value="lainnya">LAINNYA</option>
                    </select>
                </div>
                <script>
                    function tampilBank() {
                        var bank = document.getElementById("bank").value;
                        var bankLainnya = document.getElementById("banklainnya");
                        if (bank == "lainnya") {
                            bankLainnya.style.display = "";
                        }else {
                            bankLainnya.style.display = "none";
                        }
                    }
                </script>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Nama Pemilik Rekening</label>
                  <input type="text" class="form-control" id="validationDefault02" name="nama_pemilik">
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Nominal</label>
                  <div class="input-group">
                    <input type="text" name="nominal" class="form-control"  id="dengan-rupiah" aria-describedby="inputGroupPrepend2" >
                  <script>
                    var dengan_rupiah = document.getElementById('dengan-rupiah');
                    dengan_rupiah.addEventListener('keyup', function(e)
                    {
                        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
                    });
                    function formatRupiah(angka, prefix)
                {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split    = number_string.split(','),
                        sisa     = split[0].length % 3,
                        rupiah     = split[0].substr(0, sisa),
                        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                        
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }
                    
                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }
                  </script>
                </div>
                </div>
                <div class="col-12" id="banklainnya" style="display: none;">
                  <label for="validationDefault03" class="form-label">Nama Bank atau Dompet Digital</label>
                  <input type="text" class="form-control" id="validationDefault03" name="bank_lainnya">
                </div>
                <div class="col-12">
                  <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile02" name="foto_bukti">
                  <label class="input-group-text" for="inputGroupFile02">Browser</label>
                </div>
                </div>
               
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-7" type="submit">Upload Bukti Pembayaran</button>
                </div>

              </form>
              <!-- End Browser Default Validation -->

            </div>
          </div>
          @elseif($item->status == 0)
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.
      </div>
          @elseif($item->status== 1)
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Pembayaran diverifikasi, harap tunggu informasi selanjutnya.
      </div>
      @elseif($item->status == 2)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Pembayaran ditolak, harap mengisi ulang form pembayaran.
      </div>
             
       <div class="card">
            <div class="card-body">
                
              <h5 class="card-title mb-0">Form Pembayaran</h5>
              <p>Silahkan upload bukti pembayaran Anda di form berikut</p>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
              <!-- Browser Default Validation -->
              <form class="row g-3" method="POST" action="{{route('ppdb.update', $item['id'])}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Nama Bank</label>
                  <select name="bank" class="selectpicker form-select " aria-label="Default select example"   data-live-search="true" onchange="tampilBank()" id="bank" value="{{ $item['nama_bank']}}">
                    <option selected>Pilih Bank</option>
                    <option value="BRI">BANK RAKYAT INDONESIA</option>
                    <option value="MANDIRI">BANK MANDIRI</option>
                    <option value="BNI">BANK NEGARA INDONESIA</option>
                    <option value="SYARIAH">BANK SYARIAH</option>
                    <option value="BCA">BANK CENTRAL ASIA</option>
                    <option value="lainnya">LAINNYA</option>
                    </select>
                </div>
                <script>
                    function tampilBank() {
                        var bank = document.getElementById("bank").value;
                        var bankLainnya = document.getElementById("banklainnya");
                        if (bank == "lainnya") {
                            bankLainnya.style.display = "";
                        }else {
                            bankLainnya.style.display = "none";
                        }
                    }
                </script>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Nama Pemilik Rekening</label>
                  <input type="text" class="form-control" id="validationDefault02" name="nama_pemilik" value="{{ $item['nama_pemilik'] }}">
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Nominal</label>
                  <div class="input-group">
                    <input type="text" name="nominal" class="form-control"  id="dengan-rupiah" aria-describedby="inputGroupPrepend2" value="{{ $item['nominal'] }}">
                  <script>
                    var dengan_rupiah = document.getElementById('dengan-rupiah');
                    dengan_rupiah.addEventListener('keyup', function(e)
                    {
                        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
                    });
                    function formatRupiah(angka, prefix)
                {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split    = number_string.split(','),
                        sisa     = split[0].length % 3,
                        rupiah     = split[0].substr(0, sisa),
                        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                        
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }
                    
                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }
                  </script>
                </div>
                </div>
                <div class="col-12" id="banklainnya" style="display: none;">
                  <label for="validationDefault03" class="form-label">Nama Bank atau Dompet Digital</label>
                  <input type="text" class="form-control" id="validationDefault03" name="bank_lainnya">
                </div>
                <div class="col-12">
                  <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile02" name="foto_bukti">
                  <label class="input-group-text" for="inputGroupFile02">Browser</label>
                </div>
                </div>
               
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-7" type="submit">Upload Bukti Pembayaran</button>
                </div>

              </form>
              <!-- End Browser Default Validation -->

            </div>
          </div>

      
      
      @endif

</section>
</main>

@endsection