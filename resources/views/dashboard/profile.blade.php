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
  @else
  <li class="nav-item">
    <a class="nav-link  " href="/ppdb/pembayaran">
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
    <li class="breadcrumb-item active">Detail</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>

  
    </div>
 

<div class="card">
  <div class="card-body pt-3">
    <!-- Bordered Tabs -->
  
      <div class="tab-pane fade show active profile-overview" id="profile-overview">
        
        <h5 class="card-title">Data Siswa</h5>
        <ul>
            <li>NISN : {{$profile['nisn']}}</li>
            <li>Nama Siswa : {{$profile['nama']}}</li>
            <li>Jenis Kelamin : {{$profile['jenis_kelamin']}}</li>
            <li>Asal Sekolah : {{$profile['asal_sekolah']}}</li>
            <li>Email : {{$profile['email']}}</li>
            <li>No HP : {{$profile['no_hp']}}</li>
            <li>No HP Ayah : {{$profile['no_ayah']}}</li>
            <li>No HP Ibu : {{$profile['no_ibu']}}</li>

        </ul>
        <a href="/ppdb/student" type="button" class="btn btn-outline-primary btn-hover ">Kembali</a>

      </div>
</section>
</main>
@endsection