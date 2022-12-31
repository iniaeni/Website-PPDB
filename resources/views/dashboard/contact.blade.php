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
    <a class="nav-link  collapsed" href="/ppdb/verifikasi">
        <i class="bi bi-journal-text"></i>
      <span>Pembayaran</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="/ppdb/contact">
    <i class="bi bi-envelope"></i>
      <span>Data Contact</span>
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
    <li class="breadcrumb-item active">Data Contact</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">

    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>

  
    </div>
 
@foreach ($kontakUs as $kontak)
<div class="card">
  <div class="card-body pt-3">
  
      <div class="tab-pane fade show active profile-overview" id="profile-overview">
        
        <h5 class="card-title">Contact Us</h5>
        <ul>
            <li>Nama : {{$kontak['name']}}</li>
            <li>Email : {{$kontak['email']}}</li>
            <li>Pesan : {{$kontak['message']}}</li>

        </ul>
        </div>
</div>
      </div>
      @endforeach
</section>
</main>
@endsection