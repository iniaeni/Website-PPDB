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
        <li class="breadcrumb-item active"><a href=""> Dashboard</a></li>
        <li class="breadcrumb-item active">Verifikasi Pembayaran</li>
        </ol>
    </nav>
    </div>

<section class="section dashboard">
 
    <div class="card card-body">
      <h5 class="card-title mb-0 mt-1 " style="font-size: 20px;" ><strong> Hi, {{Auth::user()->nama}} </strong></h5>

        </div>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Verifikasi Pembayaran</h5>

              <table class="table ">

                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col-7">Nomor Registrasi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Detail Pembayaran</th>
                    <th scope="col">Verifikasi</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                @foreach ($dataUsr as $datauser)
                  <tr>
                    
                    <th scope="row">{{++$i}}</th>
                    <td>{{$datauser->user->id}}</td>
                    <td>{{$datauser->user->nama}}</td>
                    <td><a href="/ppdb/buktiBayar/{{ $datauser ['id'] }}">Lihat</a></td>
                    <td ><a href="/ppdb/detail">Detail</a></td>
                    <td>
                        @if($datauser['status'] == 1)
                        <p style="color: green">Di Terima</p>

                        @elseif($datauser['status'] == 2)
                        <p style="color: red">Ditolak</p>
                        @else
                        <div class="d-flex gap-1">
                        <form action="/ppdb/validasi/{{$datauser['id']}}" method="POST">
                        @csrf
                        @method('PATCH')
                      <button class="btn btn-success btn-sm">Validasi</button>
                      </form>
                      <form action="/ppdb/tolak/{{$datauser['id']}}" method="POST">
                      @csrf
                        @method('PATCH')
                       <button class="btn btn-danger btn-sm">Tolak</button>
                       </form>
                      
                       @endif
                       </div>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
</section>
</main>
@endsection