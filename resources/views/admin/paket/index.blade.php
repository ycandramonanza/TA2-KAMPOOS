@extends('master')
@section('content')
 {{-- Data Table --}}
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
                <div class="row">
                    <div class="col">
                        <button style="font-size: 14px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fas fa-plus"></i> Tambah Paket
                          </button>
                    </div>
                </div>
                <br>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
                <br>
                <div class="row">
                    <div class="col">
                      <div class="table-responsive">
                        <table id="table_id" class="display">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Gambar</th>
                                  <th>Nama Paket</th>
                                  <th>Harga</th>
                                  <th>Harga Diskon</th>
                                  <th>Fitur</th>
                                  <th>Edit</th>
                                  <th>Hapus</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($pakets as $paket)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td><img src="{{asset('storage/paket/'.$paket->image)}}" width="80px" alt=""></td>
                                  <td>{{$paket->nama_paket}}</td>
                                  <td>{{$paket->harga}}</td>
                                  <td>{{$paket->harga_diskon}}</td>
                                  <td>
                                    <button class="btn btn-primary" type="button" id="lihatFitur" data-bs-toggle="modal" data-bs-target="#staticBackdropLihatFitur" data-nama ="{{$paket->nama_paket}}" data-fitur1="{{$paket->fitur1}}" data-fitur2="{{$paket->fitur2}}" data-fitur3="{{$paket->fitur3}}" data-fitur4="{{$paket->fitur4}}" data-fitur5="{{$paket->fitur5}}" data-fitur6="{{$paket->fitur6}}" data-fitur7="{{$paket->fitur7}}" data-fitur8="{{$paket->fitur8}}" data-fitur9="{{$paket->fitur9}}" data-fitur10="{{$paket->fitur10}}">
                                      <i class="fas fa-rocket"></i>
                                    </button>
                                  </td>
                                  <td>
                                    <button style="font-size: 14px;" id="editFitur" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" data-namas ="{{$paket->nama_paket}}" data-harga="{{$paket->harga}}" data-diskon="{{$paket->harga_diskon}}" data-fiturSatu="{{$paket->fitur1}}" data-fiturDua="{{$paket->fitur2}}" data-fiturTiga="{{$paket->fitur3}}" data-fiturEmpat="{{$paket->fitur4}}" data-fiturLima="{{$paket->fitur5}}" data-fiturEnam="{{$paket->fitur6}}" data-fiturTujuh="{{$paket->fitur7}}" data-fiturDelapan="{{$paket->fitur8}}" data-fiturSembilan="{{$paket->fitur9}}" data-fiturSepuluh="{{$paket->fitur10}}">
                                      <i class="fas fa-edit"></i>
                                    </button>
                                  </td>
                                  <form action="{{route('Fitur.destroy', $paket->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td>
                                      <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Menghapus Fitur Ini ?')" style="font-size: 14px"><i class="far fa-trash-alt"></i></button>
                                  </td>
                                  </form>
                              </tr>   
                              @endforeach
                          </tbody>
                      </table>
                      </div>
                    </div>
                </div>

                {{-- Modal --}}
                <!-- Button trigger modal -->

  
  <!-- Modal Create-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Paket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('Paket.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar Paket</label>
                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  aria-describedby="emailHelp">
                  @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Paket</label>
                  <input type="text" name="nama_paket" class="form-control @error('nama_paket') is-invalid @enderror">
                  @error('nama_paket')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror">
                  @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga Diskon</label>
                  <input type="text" name="harga_diskon" class="form-control @error('harga_diskon') is-invalid @enderror">
                  @error('harga_diskon')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur1">Fitur 1 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur1" value="Revisi Sepuasnya" id="fitur1">
                  <label class="form-check-label" for="fitur1">
                    Revisi Sepuasnya
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="flexCheckDefault">Fitur 2 :</label>
                  <input class="form-check-input" type="radio" name="fitur2" value="5 Foto Album" id="Fitur5Album">
                  <label class="form-check-label" for="Fitur5Album">
                    5 Foto Album,
                  </label>
                  <input class="form-check-input" type="radio" name="fitur2" value="10 Foto Album" id="Fitur10Album">
                  <label class="form-check-label" for="Fitur10Album">
                    10 Foto Album,
                  </label>
                  <input class="form-check-input" type="radio" name="fitur2" value="20 Foto Album" id="Fitur20Album">
                  <label class="form-check-label" for="Fitur20Album">
                    20 Foto Album
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur3">Fitur 3 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur3" value="Navigasi Lokasi" id="fitur3">
                  <label class="form-check-label" for="fitur3">
                    Navigasi Lokasi
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur4">Fitur 4 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur4" value="Hitung Mundur" id="fitur4">
                  <label class="form-check-label" for="fitur4">
                    Hitung Mundur
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur5">Fitur 5 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur5" value="Kolom Ucapan" id="fitur5">
                  <label class="form-check-label" for="fitur5">
                    Kolom Ucapan
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur6">Fitur 6 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur6" value="Request Musik" id="fitur6">
                  <label class="form-check-label" for="fitur6">
                    Request Musik
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur7">Fitur 7 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur7" value="Fitur Kepada" id="fitur7">
                  <label class="form-check-label" for="fitur7">
                    Fitur Kepada
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur8">Fitur 8 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur8" value="Video Gallery" id="fitur8">
                  <label class="form-check-label" for="fitur8">
                    Video Gallery
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur9">Fitur 9 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur9" value="Fitur Berikan Angpao" id="fitur9">
                  <label class="form-check-label" for="fitur9">
                    Fitur Berikan Angpao
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur10">Fitur 10 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur10" value="Fitur RSVP (Konfirmasi kehadiran tamu)" id="fitur10">
                  <label class="form-check-label" for="fitur10">
                    Fitur RSVP (Konfirmasi kehadiran tamu)
                  </label>
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

  {{-- Modal Edit --}}
   <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Paket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('Paket.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar Paket</label>
                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  aria-describedby="emailHelp">
                  @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Paket</label>
                  <input type="text" id="namaPaket" name="nama_paket" class="form-control @error('nama_paket') is-invalid @enderror">
                  @error('nama_paket')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror">
                  @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga Diskon</label>
                  <input type="text" name="harga_diskon" id="diskon" class="form-control @error('harga_diskon') is-invalid @enderror">
                  @error('harga_diskon')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur1">Fitur 1 :</label>
                  <input class="form-check-input" id="fitur1" type="checkbox" name="fitur1" value="Revisi Sepuasnya" id="f1">
                  <label class="form-check-label" for="f1">
                    Revisi Sepuasnya
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="flexCheckDefault">Fitur 2 :</label>
                  <input class="form-check-input" type="radio" name="fitur2" value="5 Foto Album" id="">
                  <label class="form-check-label" for="">
                    5 Foto Album,
                  </label>
                  <input class="form-check-input" type="radio" name="fitur2" value="10 Foto Album" id="">
                  <label class="form-check-label" for="">
                    10 Foto Album,
                  </label>
                  <input class="form-check-input" type="radio" name="fitur2" value="20 Foto Album" id="">
                  <label class="form-check-label" for="">
                    20 Foto Album
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur3">Fitur 3 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur3" value="Navigasi Lokasi" id="">
                  <label class="form-check-label" for="">
                    Navigasi Lokasi
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur4">Fitur 4 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur4" value="Hitung Mundur" id="">
                  <label class="form-check-label" for="">
                    Hitung Mundur
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur5">Fitur 5 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur5" value="Kolom Ucapan" id="">
                  <label class="form-check-label" for="">
                    Kolom Ucapan
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur6">Fitur 6 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur6" value="Request Musik" id="">
                  <label class="form-check-label" for="">
                    Request Musik
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur7">Fitur 7 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur7" value="Fitur Kepada" id="">
                  <label class="form-check-label" for="">
                    Fitur Kepada
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur8">Fitur 8 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur8" value="Video Gallery" id="">
                  <label class="form-check-label" for="">
                    Video Gallery
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur9">Fitur 9 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur9" value="Fitur Berikan Angpao" id="">
                  <label class="form-check-label" for="">
                    Fitur Berikan Angpao
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="fitur10">Fitur 10 :</label>
                  <input class="form-check-input" type="checkbox" name="fitur10" value="Fitur RSVP (Konfirmasi kehadiran tamu)" id="">
                  <label class="form-check-label" for="">
                    Fitur RSVP (Konfirmasi kehadiran tamu)
                  </label>
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
  {{-- End Modal Edit --}}


  

    <!-- Modal Lihat Fitur-->
    <div class="modal fade" id="staticBackdropLihatFitur" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Lihat Fitur <span id="nama"></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
          <ul id="dataLi">
              <li class="paket" id="1"></li>
              <li class="paket" id="2"></li>
              <li class="paket" id="3"></li>
              <li class="paket" id="4"></li>
              <li class="paket" id="5"></li>
              <li class="paket" id="6"></li>
              <li class="paket" id="7"></li>
              <li class="paket" id="8"></li>
              <li class="paket" id="9"></li>
              <li class="paket" id="10"></li>
          </ul>
        
          
      </div>
  </div>
</div>
 {{-- end Modal Lihat Fitur --}}


        {{-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> --}}
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

           {{-- Modal Edit Fitur --}}
           <script>
            $(document).on("click", "#editFitur" ,function(){
                var namaPaket = $(this).data('namas');
                var harga = $(this).data('harga');
                var diskon = $(this).data('diskon');
                var fiturSatu = $(this).data('fiturSatu');
                var fiturDua = $(this).data('fiturDua');
                var fiturTiga = $(this).data('fiturTiga');
                var fiturEmpat = $(this).data('fiturEmpat');
                var fiturLima = $(this).data('fiturLima');
                var fiturEnam = $(this).data('fiturEnam');
                var fiturTujuh = $(this).data('fiturTujuh');
                var fiturDelapan = $(this).data('fiturDelapan');
                var fiturSembilan = $(this).data('fiturSembilan');
                var fiturSepuluh = $(this).data('fiturSepuluh');
                // console.log(harga );
                // console.log(diskon);
                // console.log(fiturSatu);
                // console.log(fiturDua );
                // console.log(fiturTiga);
                // console.log(fiturEmpat);
                // console.log(fiturLima);
                // console.log(fiturEnam);
                // console.log(fiturTujuh);
                // console.log(fiturDelapan;
                // console.log(fiturSembilan);
                // console.log(fiturSepuluh);
                $('#namaPaket').val(namaPaket);
                $('#harga').val(harga);
                $('#diskon').val(diskon);
                $('#f1').prop(true);
                $('#fitur2').val(fiturDua);
                $('#fitur3').val(fiturTiga);
                $('#fitur4').val(fiturEmpat);
                $('#fitur5').val(fiturLima);
                $('#fitur6').val(fiturEnam);
                $('#fitur7').val(fiturTujuh);
                $('#fitur8').val(fiturDelapan);
                $('#fitur9').val(fiturSembilan);
                $('#fitur10').val(fiturSepuluh);
               
                // $('#3').text(fitur3);
                // $('#4').text(fitur4);
                // $('#5').text(fitur5);
                // $('#6').text(fitur6);
                // $('#7').text(fitur7);
                // $('#8').text(fitur8);
                // $('#9').text(fitur9);
                // $('#10').text(fitur10);
            });
                  

           
        </script>








             {{-- Modal Lihat Fitur --}}
            <script>
              $(document).on("click", "#lihatFitur" ,function(){
                  var nama = $(this).data('nama');
                  var fitur1 = $(this).data('fitur1');
                  var fitur2 = $(this).data('fitur2');
                  var fitur3 = $(this).data('fitur3');
                  var fitur4 = $(this).data('fitur4');
                  var fitur5 = $(this).data('fitur5');
                  var fitur6 = $(this).data('fitur6');
                  var fitur7 = $(this).data('fitur7');
                  var fitur8 = $(this).data('fitur8');
                  var fitur9 = $(this).data('fitur9');
                  var fitur10 = $(this).data('fitur10');
                  // console.log(fitur1);
                  // console.log(fitur2);
                  // console.log(fitur3);
                  // console.log(fitur4);
                  // console.log(fitur5);
                  // console.log(fitur6);
                  // console.log(fitur7);
                  // console.log(fitur8);
                  // console.log(fitur9);
                  // console.log(fitur10);
                  $('#nama').text(nama);
                  $('#1').text(fitur1);
                  $('#2').text(fitur2);
                  $('#3').text(fitur3);
                  $('#4').text(fitur4);
                  $('#5').text(fitur5);
                  $('#6').text(fitur6);
                  $('#7').text(fitur7);
                  $('#8').text(fitur8);
                  $('#9').text(fitur9);
                  $('#10').text(fitur10);

                  let liData = document.getElementsByClassName('paket');
                  let length = liData.length;
                  for(var i = 0; i<length; i++){

                     let datas = liData[i];
              
                   if( datas.innerHTML == ''){
                       liData[i].style.visibility = "hidden";
                   } else{
                       liData[i].style.visibility = "visible";
                   } 
                     

                  }
            
              })

             
          </script>



         {{-- Modal Edit --}}
        <script>
          $(document).on("click", "#cek" ,function(){
              var image = $(this).data('image');
              var namaFitur = $(this).data('nama');
              var desc = $(this).data('desc');
              var route = $(this).data('route');
              $('#route').attr('action', route);
              $('#image').attr('src', image);
              $('#namaFitur').val(namaFitur);
              $('#desc').text(desc);
          })
      </script>

      {{-- Data Table --}}
        <script>
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
        </script>

        {{-- Ajax Validasi --}}

        {{-- <script> --}}
{{-- 
          // $(function(){
              // $("#main_form").on('submit', function(e){
              //   e.preventDefault();

              //     $.ajax({
              //         url:$(this).attr('action'),
              //         method:$(this).attr('method'),
              //         data:new FormData(this),
              //         processData:false,
              //         dataType:'json',
              //         contentType:false,
              //         beforeSend:function(){
              //             $(document).find('span.error-text').text('')
              //         },
              //         success:function(data){
              //             if(data.status == 0){
              //               $.each(data.error, function(prefix, val){
              //                 $('span.'+prefix+'_error').text(val[0]);
              //               });
              //             }else{
              //               $('#main_form')[0].reset();
              //               alert(data.msg);
              //             }
              //         }
              //     });


              // });
          }); --}}



        {{-- // </script> --}}


@endsection
           