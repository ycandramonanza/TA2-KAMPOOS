<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <h1 style="margin-top:20px">WeStory</h1>
            <p>Membuat Undangan Anda Menjadi Lebih Menarik</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/2.jpg')}}" style="filter: brightness(55%); height:500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo3.png')}}" style="width:150px; margin-top:100px" alt="WeStory">
            <h1 style="margin-top:20px">WeStory</h1>
            <p>Dalam Satu Tautan Yang Mudah Dikirimkan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/3.jpg')}}" style="filter: brightness(55%); height:500px"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <img src="{{asset('img/logo.png')}}" style="width:150px; margin-top:100px" alt="WeStory">
            <h1 style="margin-top:20px">WeStory</h1>
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
          <h1 class="navbar-brand" href="#">WeStory</h1>
          <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i style="color: white" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a id="menu" class="nav-link active" aria-current="page" href="#">Home</a>
              <a  id="menu" class="nav-link" href="#">Fitur</a>
              <a  id="menu" class="nav-link" href="#">Paket Harga</a>
            </div>
          </div>
        </div>
      </nav>

      {{-- Content  Fitur --}}
      <div id="content1">
        <div class="container">
          <div  class="row mt-5">
            <div class="col" align="center">
                <h2 >Fitur Yang Ada di <span style="font-size: 50px" id="judulFitur">WeStory</span></h2>
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
            <div class="col" style="color: white">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet ducimus voluptatibus est temporibus nam! Molestiae totam quos eligendi ducimus placeat aliquam nam quaerat odit numquam illum voluptatibus itaque aspernatur sit saepe minima, ea unde nisi quia nesciunt? Quia impedit unde dolores minima dolore repellat ratione possimus laboriosam accusamus, eos nemo beatae aliquid corrupti tempora quibusdam tempore quos modi nisi libero, quidem sit? Quas distinctio illum placeat. Incidunt blanditiis dolor impedit sed enim repellendus debitis odit, mollitia veritatis autem? Neque quod obcaecati sed soluta iusto cumque beatae, omnis magni, doloribus amet nulla unde enim tenetur provident inventore laborum adipisci mollitia, repellendus perspiciatis. Consequatur aliquid repellendus ratione quaerat explicabo dicta incidunt odit doloremque? Quas autem animi quisquam? Nesciunt, odio possimus sequi minus eos itaque expedita ipsam molestias repellendus eligendi nisi laboriosam unde rem earum quam, ex doloremque. Totam numquam, voluptates facilis veritatis labore optio sit earum amet ad. Provident beatae consectetur praesentium aspernatur omnis labore eius eum facere obcaecati quaerat eligendi consequuntur rerum, at error iusto possimus modi! Magni eum ipsa obcaecati deleniti asperiores labore laudantium possimus dolor fuga dicta soluta tempore quibusdam repellat velit consectetur, aperiam corporis dolores sapiente inventore exercitationem quo tempora. Tenetur cumque odio harum, architecto optio excepturi incidunt eius rem quasi veritatis aliquam dolorem consequuntur facilis veniam deserunt autem ex corrupti reprehenderit! Laboriosam officiis perspiciatis repellendus veniam excepturi in eligendi tempora nobis, aliquam vel, optio quo rerum vero esse, nam quasi quam ipsam vitae maiores assumenda. Debitis perspiciatis nesciunt totam labore quasi explicabo tempore pariatur aliquam qui? Ex, eaque debitis corporis sequi numquam, provident quidem molestias architecto consequatur natus sit optio ab quo adipisci illum quos aperiam cupiditate fugit exercitationem minus incidunt distinctio pariatur! Illo recusandae soluta accusamus molestias fugiat veniam delectus? Est, et inventore rerum perferendis cupiditate recusandae, harum expedita delectus voluptate quo incidunt eius? Molestias aliquam asperiores maxime esse, non doloremque ut veniam quos nam enim sit, minima assumenda et quibusdam ad veritatis numquam error corporis delectus cumque. Iusto beatae praesentium repellat quasi fuga, perspiciatis sed quae tenetur libero, neque quam soluta. Suscipit, enim consequuntur consectetur dignissimos amet similique soluta blanditiis perspiciatis earum. Voluptates nobis doloremque blanditiis iure assumenda quo enim in deleniti inventore sunt, consectetur praesentium cumque qui, at vel, non tenetur quasi corrupti. Inventore dolore dolor aut labore quas, architecto amet commodi, officia eius natus ipsa mollitia cupiditate unde quisquam! Officia tempora quos, voluptatem alias inventore architecto qui, quod autem aliquam rem officiis, unde cum. Quo ullam culpa in dicta beatae, quibusdam officia corrupti, modi quaerat voluptate deserunt hic facilis eum. Veniam fugit, alias beatae tempore voluptatum dolorem voluptatibus. Culpa, non quisquam corporis autem officiis quibusdam tenetur ex obcaecati reiciendis molestias harum accusamus. Natus, enim nesciunt esse nostrum fugit odit quam inventore earum nihil non numquam alias deleniti error culpa dicta, officia beatae expedita quasi sapiente, quo ab! Veritatis laboriosam culpa, amet vel obcaecati aliquid, minus, error quae maiores quam laborum similique incidunt deleniti nostrum corporis consequatur nam hic? Suscipit, quo saepe alias sint natus quisquam repudiandae nam nobis velit totam aut, praesentium provident?
            </div>
          </div>
        </div>
      </div>
     
          
        

      
   

   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('fontawesome/js/all.min.js')}}"></script>
</body>
</html>