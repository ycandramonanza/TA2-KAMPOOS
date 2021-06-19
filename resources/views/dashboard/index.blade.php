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
            <img src="{{asset('img/logo2.png')}}" style="width:150px; margin-top:100px" alt="WeStory">
            <h1 style="margin-top:20px">Digital Invitations</h1>
            <p>Membuat Undangan Anda Menjadi Lebih Menarik</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/2.jpg')}}" style="filter: brightness(55%); height:500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo3.png')}}" style="width:150px; margin-top:100px" alt="WeStory">
            <h1 style="margin-top:20px">Digital Invitations</h1>
            <p>Dalam Satu Tautan Yang Mudah Dikirimkan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/3.jpg')}}" style="filter: brightness(55%); height:500px"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo.png')}}" style="width:150px; margin-top:100px" alt="WeStory">
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
          <h1 class="navbar-brand" href="#">Digital Invitations</h1>
          <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i style="color: white" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a id="menu" class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
              <a  id="menu" class="nav-link" href="#"><i class="fas fa-rocket"></i> Fitur</a>
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
      <div id="content1">
        <div class="container">
          <div  class="row mt-5">
            <div class="col" align="center">
                <h2 >Fitur Yang Ada di <b style="font-size: 30px; color: rgb(82, 139, 116)">Digital Invitations</b></h2>
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
      </div>
          <br>
          <br>
      <div id="content2">
        <div class="container">
          <div class="row">
            <div class="col" align="center" style="color: white">
              <h2 style="font-size:38px; margin-top:50px" >Daftar Harga</h2>
                <div class="row">
                  <h4 style="font-size:20px">Paket Undangan Web <b style="color:rgb(99, 173, 143); font-size:25px">Digital Invitation </b> </h4>
                </div>
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
                        <button class="btn btn-success"><i class="fas fa-cart-plus"></i> Pesan Sekarang</button>
                    </div>
                </div>
                  @endauth
                  </div>
                </div> 
             
              </div>
              @endforeach
          </div>
        </div>
      </div>
           {{-- content Testimoni --}}
      <div class="div" id="testimoni">
        <div class="row" style="margin-top:100px">
            <div class="col">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, nam. Eos, rerum blanditiis natus earum tempora quidem provident alias, velit consequuntur neque quos. Illum corrupti commodi quisquam asperiores reprehenderit officiis explicabo, facilis voluptatum qui officia vitae suscipit repellendus sequi ab. Id minus consectetur distinctio vel quisquam a impedit, quasi officia non quis unde nisi provident praesentium exercitationem tenetur modi ad? Delectus, praesentium! Eum cum delectus dolorum? Repellat sunt enim optio, aut voluptates pariatur, eum necessitatibus quasi, nisi laboriosam maiores laudantium soluta animi veniam sint facilis nam? Omnis mollitia sint ex incidunt unde deleniti debitis illo voluptates voluptas fugit voluptatibus doloribus consequatur, aspernatur odit quas modi reprehenderit inventore fuga exercitationem error, suscipit officia? Ratione adipisci odio necessitatibus repellat est iusto? Laudantium vero nam deserunt fuga ex facere, tempore dolorum, alias nobis laboriosam itaque beatae eius? Voluptate doloremque esse, distinctio corporis commodi laborum tempore eum est atque consectetur, asperiores sequi a? Unde, facilis impedit in eaque ut, suscipit perferendis error eum laudantium earum, voluptatum aperiam adipisci accusantium qui. Temporibus, recusandae qui facilis ut fuga molestias perferendis obcaecati exercitationem delectus nam labore commodi reprehenderit quae, officia omnis laborum iure id debitis? Commodi voluptatem optio voluptates, magni ipsa ipsam. Numquam, voluptates eius. Praesentium veniam nihil voluptates possimus quam cumque qui culpa ducimus ipsam soluta, porro quibusdam sit explicabo ad architecto. Molestias, sit quis asperiores saepe eligendi assumenda est soluta praesentium, tempore voluptatum non! Nulla, odio! Voluptatum omnis dolorum eaque similique ducimus sequi est, esse reprehenderit ipsa a, aliquid obcaecati eos dolore nemo repellat, voluptate veritatis quam commodi ullam. Libero fugit hic totam deserunt officia asperiores ad repudiandae! Non temporibus inventore expedita exercitationem aliquid soluta, rem reprehenderit aperiam accusantium doloribus pariatur provident eos ab nulla atque mollitia nihil eaque. Et aspernatur molestias vero maiores tenetur fugiat, velit alias debitis. Consequuntur ratione natus unde nulla aut!
            </div>
        </div>
    </div>
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
     
     
          
        

      
   

   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('fontawesome/js/all.min.js')}}"></script>
</body>
</html>