<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Invitations</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    {{-- font --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    {{-- Testimoni Css --}}
    <style>

.testimonials-v-2 {
  padding: 100px 0;
  overflow: hidden;
}

.testi-slide {
  text-align: center;
}

.testi-slide img {
  width: 92px;
  height: 92px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.testi-slide p {
  margin: 20px 0;
  font-size: 16px;
  font-weight: 400;
  line-height: 30px;
  font-style: italic;
}

.testi-slide i {
  color: #32c5d2;
  margin-right: 10px;
}

.testi-slide h4 {
  font-weight: 400;
  font-size: 16px;
  font-family: "Lato", sans-serif !important;
  font-style: italic;
}

.testi-slide .flex-control-paging li a {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  box-shadow: none;
  background: transparent !important;
  border: 2px solid rgb(99, 173, 143);
  width: 8px;
  height: 8px;
}

.testi-slide .flex-control-paging li a.flex-active {
  background: transparent !important;
  border: 2px solid rgb(99, 173, 143);
}

.quote {
  position: relative;
}

.quote blockquote {
  padding: 0px;
  border: 0;
  margin: 0;
  font-size: 14px;
  font-style: italic;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  border-radius: 8px;
}

.quote blockquote p {
  color: #fff;
  padding-top: 25px;
  padding-bottom: 45px;
  padding-left: 30px;
  padding-right: 30px;
}

.quote blockquote:before {
  content: "";
  position: absolute;
  top: 100%;
  left: 90px;
  width: 0;
  height: 0;
  border-top: 0.83333em solid #ccc;
  border-right: 0.86667em solid transparent;
}


.quote.green blockquote {
  background-color: rgb(99, 173, 143);
}


.quote.dark blockquote {
  background-color: #555;
}

.quote.dark blockquote:before {
  border-top-color: #555;
}

.quote-footer {
  margin: 10px 0;
}

.quote-footer .quote-author-img img {
  float: left;
  max-width: 90px;
  width: 90px;
  height: 90px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  margin-left: -5px;
  margin-top: -40px;
  position: relative;
  z-index: 1;
  padding: 5px;
  background-color: #fff;
}

.quote-footer h4 {
  font-size: 14px;
  margin-bottom: 4px;
}

.quote-footer p {
  font-weight: 400;
  font-style: italic;
  font-size: 14px;
}
    </style>
    {{-- End Testimoni --}}
</head>
<body>
    {{-- Crousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/1.jpg')}}" style="filter: brightness(55%); height:500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo2.png')}}" style="width:150px; margin-top:100px" alt="Digital-Invitation">
            <h1 style="margin-top:20px">Digital Invitations</h1>
            <p>Membuat Undangan Anda Menjadi Lebih Menarik</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/2.jpg')}}" style="filter: brightness(55%); height:500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo3.png')}}" style="width:150px; margin-top:100px" alt="Digital-Invitation">
            <h1 style="margin-top:20px">Digital Invitations</h1>
            <p>Dalam Satu Tautan Yang Mudah Dikirimkan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/3.jpg')}}" style="filter: brightness(55%); height:500px"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo.png')}}" style="width:150px; margin-top:100px" alt="Digital-Invitation">
            <h1 style="margin-top:20px">Digital Invitations</h1>
            <p>Solusi Undangan Yang Efisen di Era Digital</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    {{-- Nabar --}}
    <nav class="navbar navbar-expand-lg  sticky-top" style="background-color: rgb(99, 173, 143)
    ; color:white">
        <div class="container-fluid">
          <h2 class="navbar-brand" href="#">@guest Digital Invitations @endguest  @auth{{Auth::user()->name}}@endauth</h2>
          <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i style="color: white" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a id="menu" class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
              <a  id="menu" class="nav-link" href="#fitur"><i class="fas fa-rocket"></i> Fitur</a>
              <a  id="menu" class="nav-link" href="#"><i class="fas fa-tags"></i> Paket Harga</a>
              @if (Auth::guest())
              <a  id="menu" class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
              <a  id="menu" class="nav-link" href="{{route('register')}}"><i class="fas fa-key"></i> Regiter</a>
              @endif
              @auth
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="color:white" onclick="return confirm('Apakah Kamu Yakin ingin Sign Out ?')" class="btn btn-default btn-flat">Sign out    <i class="fas fa-sign-out-alt"></i></button>
            </form>  
              @endauth
            </div>
          </div>
        </div>
      </nav>

      {{-- Content  Fitur --}}
      <section id="content1">
        <div class="container">
          <div  class="row mt-5">
            <div class="col" align="center">
                <h2 id="fitur" >Fitur Yang Ada di <b style="font-size: 30px; color: rgb(82, 139, 116)">Digital Invitations</b></h2>
            </div>
          </div>
          <br>
          <div class="row">
            @foreach ($fiturs as $fitur)
            <div class="col-xs-12 col-sm-6 col-md-4" align="center" style="margin-bottom:10px">
              <div class="card" id="cardFitur">
                <div class="card-body">
                  <img class="img-fluid" id="imageFitur" style="width: 200px" src="{{asset('storage/fitur/'. $fitur->image)}}" alt="">
                   <br>
                   <br>
                  <h1 class="card-title">{{$fitur->nama_fitur}}</h1>
                  <h2 class="card-text" style="font-size: 14px">{{$fitur->desc}}</h2>
                </div>
              </div>
            </div>
            @endforeach
        </div>
        </div>
      </section>
          <br>
          <br>
      <section id="content2" >
        <div class="container">
          <div class="row">
            <div class="col" align="center" style="color: white">
              <h2 style="font-size:38px; margin-top:50px" >Daftar Harga</h2>
                <div class="row">
                  <h4 style="font-size:20px">Paket Undangan Web <b style="color:rgb(99, 173, 143); font-size:25px">Digital Invitation </b> </h4>
                </div>
                @if (session('order'))
                <div class="alert alert-success">
                    {{ session('order') }}
                </div>
                 @endif
            </div>
          </div>
          <br>
          <br>
          {{-- content Paket --}}
          <div class="row">
            @foreach ($pakets as $paket)
              <div class="col-12 col-md-4">
                <div class="card">
                  <div class="card-body" align="center">
                    <h2 style=" font-size:40px">{{$paket->nama_paket}}</h2>
                    <img width="100px" src="{{asset('storage/paket/'.$paket->image)}}" alt="">
                      <div class="row">
                          <div class="col">
                            <span style=" font-size:40px; color:red"><del><b>Rp.</b>{{number_format($paket->harga)}}<del></span>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <span style=" font-size:30px"><b>Rp.</b>{{number_format($paket->harga_diskon)}}</span>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col" align="left">
                          <ul>
                              <li>{{$paket->fitur1}}</li>
                              <li>{{$paket->fitur2}}</li>
                              <li>{{$paket->fitur3}}</li>
                              <li>{{$paket->fitur4}}</li>
                              <li>{{$paket->fitur5}}</li>
                              <li>{{$paket->fitur6}}</li>
                              <li>{{$paket->fitur7}}</li>
                              <li>{{$paket->fitur8}}</li>
                              <li>{{$paket->fitur9}}</li>
                              <li>{{$paket->fitur10}}</li>
                              
                          </ul>
                      </div>
                  </div>
                  @auth
                  <div class="row">
                    <div class="col">
                        <button id="order" type="button" data-bs-target="#staticBackdropOrder" data-bs-toggle="modal"  class="btn btn-success" data-order="{{$paket->nama_paket}}">
                            <i class="fas fa-cart-plus"></i> Pesan Sekarang
                        </button>
                    </div>
                </div>
                  @endauth
                  </div>
                </div> 
             
              </div>
              @endforeach
          </div>
        </div>
      </section>
           {{-- content Testimoni --}}
      <section id="content3">
        <div class="container">
          <div class="row" style="margin-top: 50px">
        <div class="col-12" align="center" style="margin-bottom: 30px">
          <h2 style="font-size: 20px">Kata Mereka Tentang <span style="color:rgb(99, 173, 143);; font-size:30px"><b>Digital-Invitation</b></span></h2>
        </div>

        @foreach ($testimonis as $testimoni)
        <div class="col-md-4 margin-btm-20 testimonis">
            <div class="quote green">
                <blockquote>
                    <p>
                       {{$testimoni->testimoni}}                        
                    </p>
                </blockquote>                        
            </div>
            <div class="quote-footer text-right">
                <div class="quote-author-img">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                </div>
                <h4>{{$testimoni->user->name}}</h4>
                <p>
                    <strong>{{$testimoni->created_at->format('d-M-Y')}}</strong>
                </p>
            </div>
        </div><!--colored quote box col-->
        @endforeach
    </div><!--testimonials row-->   
    </div>
      </section>
      @auth
      @if (Auth::user()->role == 'pembeli')
           {{-- Form Testimoni --}}
      <div id="testimonies">
        <div class="container">
          <div class="row" style="margin-top:50px">
            <div class="col-12" align="center">
                 <h2 style="font-size:30px"><b>Testimoni</b></h2>
            </div>
            @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
             @endif
             @if (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
             @endif
            <form action="{{route('Testimoni.store')}}" method="POST">
              @csrf
             <div class="col-12">
                   <textarea class="form-control" name="testimoni" id="testimoni"  rows="10"></textarea>
                   <div class="row">
                        <div class="col text-end">
                          <button type="submit"  class="btn btn-primary" style="margin-top:20px">
                            <i class="fas fa-paper-plane"></i> Send 
                           </button>
                        </div>
                   </div>
             </div>
            </form>
       </div>
        </div>
    </div>
      @endif
      @endauth
  
      {{-- Modal Order --}}
      <div class="modal fade" id="staticBackdropOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Tambah Order</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <form action="{{route('Order.store')}}" method="POST">
                    @csrf
                      <div class="row">
                          <div class="col">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Nama Pengantin / Nama Pemilik Acara</label>
                              <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Ex : Rudi & Siti">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Paket</label>
                              <input type="text" name="paket" id="paket" readonly class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tempat Acara</label>
                              <input type="text" name="tempat_acara" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Tanggal Acara</label>
                              <input type="date" name="tanggal_acara" class="form-control" id="exampleFormControlInput1">
                            </div>
                          </div>
                      </div>
                 
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Order --}}
      <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      
      <script>
           $(document).on("click", "#order" ,function(){
                var paket= $(this).data('order');
                $('#paket').val(paket);
           });
      </script>

  
</body>
</html>