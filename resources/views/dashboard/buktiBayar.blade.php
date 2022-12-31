@extends('layout')

@section('content')
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link  collapsed " href="/ppdb/student">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  @if(Auth::user()->role == 'admin')
  <li class="nav-item">
    <a class="nav-link  " href="/ppdb/verifikasi">
        <i class="bi bi-journal-text"></i>
      <span>Pembayaran</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed " href="/ppdb/contact">
    <i class="bi bi-envelope"></i>
      <span>Data Contact</span>
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
  </li>

</aside>

<main id="main" class="main">

<div class="pagetitle">
  @if(Auth::user()->role == 'admin')
  <h1>Admin</h1>
  @else
      <h1>Student</h1>
  @endif
  <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="/ppdb/student">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="/ppdb/verifikasi"> Verifikasi Pembayaran</a></li>
    <li class="breadcrumb-item active">Bukti Bayar</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>
    </div>
 
<div class="card">
  <div class="card-body pt-3"><center>
  <h4 style="color: #012970;"><strong>Bukti Pembayaran</strong>  </h4>
  <hr>
  @if(is_null($buktibayar['foto_bukti']))
 <img width="300"  src="{{asset('assets/img/ex-buktibayar.jpg')}}" alt=""><br><br>
 @else
 <img width="300"  src="{{asset('assets/img/'.$buktibayar['foto_bukti'])}}" alt=""><br><br>
 @endif
     <p>
            Nama Bank : {{$buktibayar['bank']}} {{$buktibayar['bank_lainnya']}}<br>
            Nama Pemilik Rekening : {{$buktibayar['nama_pemilik']}}<br>
            Nominal : {{$buktibayar['nominal']}}<br>
        </p>
        <a href="/ppdb/verifikasi" type="button" class="btn btn-outline-primary btn-hover ">Kembali</a>
       
        </center>
      </div>
</section>
</main>
@endsection