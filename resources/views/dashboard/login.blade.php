<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link href="{{asset('assets/img/Logo.png')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body >
 
    <div class="login-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="{{route('login.auth')}}" method="POST">
                @csrf
            <div class="text-center mt-3">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
              @if (Session::get('gagal'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{Session::get('gagal')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                @endif
                @if (Session::get('notAllowed'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{Session::get('notAllowed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                @endif
                <h5><strong>Login</strong></h5>
                <h6 class="text-muted">Masuk ke Akun PPDB-mu</h6>
            </div><br><br>
                <div class="form-group">
                    <label for="" class="mb-0">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="Masukan email aktif"></div>
                    <br>
                    <label for="" class="mb-0">Password</label>
                   <input class="form-control"  name="password" placeholder="Masukan password anda" type="password"><br><br>
                <button type="submit" class="btn btn-primary btn-block">Login</button><br>
                <br><br>
        </div>
    </div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>