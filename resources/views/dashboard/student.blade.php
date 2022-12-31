@extends('layout')

@section('content')
 
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/ppdb/student">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
  @if(Auth::user()->role == 'admin')
  <li class="nav-item">
    <a class="nav-link collapsed " href="/ppdb/verifikasi">
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
    <a class="nav-link collapsed " href="/ppdb/pembayaran">
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
@if(Auth::user()->role == 'admin')
<h1>Admin</h1>
@else
    <h1>Student</h1>
@endif
  <nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row"> 
    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>

        </div>
    </div>
    @if (Session::get('berhasil'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{Session::get('berhasil')}} {{Auth::user()->nama}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
  @endif
  @if (Session::get('notAllowed'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{Session::get('notAllowed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
  @endif

  @if(Auth::user()->role == 'admin')
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa!
  </div>
  @else

  @if (!isset($item))
 
  @elseif($item->status == 1)
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                Pembayaran diverifikasi, harap tunggu informasi selanjutnya.
      </div>
  @elseif($item->status == 2)
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Pembayaran ditolak, harap mengisi ulang form pembayaran.
      </div>
    @else
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.
      </div>
  @endif
  @endif






  @if (Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{Session::get('success')}}
                
              </div>
   @endif
   <!-- @if (Session::get('success'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
              Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.
               
              </div>
   @endif -->
@endsection
</section>
    </main>
