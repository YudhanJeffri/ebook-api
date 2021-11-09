@php
$halaman;
@endphp
<!DOCTYPE html>
<head>
    <style>
        body{
           background: black !important;
        }
        .jumbotron {
            
            background-size: cover;
            height: 900px;
            text-align: center;
            background-image:  url({{ asset('storage/landing-image/cover_landing_page.png') }});
            
        }
        .pooter{
            margin-top: -75px;
        }
        .jumbotron .display-4 {
            color: white;
           margin-bottom: 30px;
            margin-top: 150px;
            font-weight: 200;

        }
        .jumbotron .display-4 span {
            font-weight: 500;
        }
    </style>
    
    <link rel="stylesheet" href="/public/css/styleLanding.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <script src="/resources/views/ckeditor/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <title>PERPUSAJA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/landingPage" >PERPUSAJA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($halaman === "book") ? 'active' : '' }}" aria-current="page" href="/">Daftar Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($halaman === "pengarang") ? 'active' : '' }}" aria-current="page" href="/pengarang">Daftar Pengarang</a>
              </li>
              <li class="nav-item">
                
                @if ( Session::get('access_token') != null)
                  @if ($halaman === 'pengarang')
                  <a class="nav-link active" href="/addPengarang" >Tambah Pengarang</a>
                  @elseif($halaman === 'book') 
                  <a class="nav-link active" href="/addBook" >Tambah Buku</a>    
                  @endif
                  
                @else 
                  <a class="nav-link active" href="/login" >Tambah Buku</a>
                @endif
              </li>
            </ul>
            @if ($halaman === 'book')
            <form class="d-flex ms-auto" action="/">
              <input class="form-control me-2" type="search" name="search" placeholder="judul, pengarang" aria-label="Search" value="{{ request('search') }}">
              <button class="btn btn-outline-primary me-5" type="submit">Search</button>
            </form>
            @elseif($halaman === 'pengarang')
            <form class="d-flex ms-auto" action="/pengarang">
              <input class="form-control me-2" type="search" name="search" placeholder="judul, pengarang" aria-label="Search" value="{{ request('search') }}">
              <button class="btn btn-outline-primary me-5" type="submit">Search</button>
            </form>
            @endif
            @if ( Session::get('access_token') != null)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/logout" class="nav-link" ><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link" ><i class="bi bi-box-arrow-in-right me-1"></i>Login</a>
                </li>
            </ul>
                
            @endif
            
          </div>
        </div>
      </nav>
      <div class="jumbotron jumbotron-fluid">
        <div>
          <h1 class="display-4">Temukan <span>Buku</span> lebih lengkap dan <br><span>Penulis</span> dengan <span>PERPUSAJA</span></h1>
          @if ( Session::get('access_token') == null)
          
          <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/login" class="btn btn-primary tombol">Login Sekarang</a>
            </li>
        </ul>
                
            @endif
          
        </div>
      </div>
      <footer class="bg-dark text-center text-white pooter">
        <div class="container p-4 pb-0">
          <section class="">
            <form action="">
              <div class="row d-flex justify-content-center">
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Update buku setiap hari</strong>
                  </p>
                </div>
                <div class="col-md-5 col-12">
                  <div class="form-outline form-white mb-4">
                    <input type="email" placeholder="Berlangganan Sekarang Juga !!" id="form5Example29" class="form-control" />
                    <label class="form-label" for="form5Example29">Email address</label>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-outline-light mb-4">
                    Subscribe
                  </button>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://github.com/YudhanJeffri">Yudhan Jeffri Djuniartha</a>
        </div>
      </footer>
</body>
</html>
