@extends('master')
@section('content')
 {{-- Data Table --}}
 
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                  <td>Rp.{{number_format($paket->harga)}}</td>
                                  <td>Rp.{{number_format($paket->harga_diskon)}}</td>
                                  <td>
                                    <button class="btn btn-primary" type="button" id="lihatFitur" data-bs-toggle="modal" data-bs-target="#staticBackdropLihatFitur" data-nama ="{{$paket->nama_paket}}" data-fitur1="{{$paket->fitur1}}" data-fitur2="{{$paket->fitur2}}" data-fitur3="{{$paket->fitur3}}" data-fitur4="{{$paket->fitur4}}" data-fitur5="{{$paket->fitur5}}" data-fitur6="{{$paket->fitur6}}" data-fitur7="{{$paket->fitur7}}" data-fitur8="{{$paket->fitur8}}" data-fitur9="{{$paket->fitur9}}" data-fitur10="{{$paket->fitur10}}">
                                      <i class="fas fa-rocket"></i>
                                    </button>
                                  </td>
                                  <td>
                                    <button style="font-size: 14px;" id="editFitur" type="button" class="btn btn-success edit-fitur" data-bs-toggle="modal" data-bs-target="#modal-edit" data-route ="{{route('Paket.update',$paket->id )}}" data-id ="{{$paket->id}}" data-namas ="{{$paket->nama_paket}}" data-harga="{{$paket->harga}}" data-diskon="{{$paket->harga_diskon}}" data-1="{{$paket->fitur1}}" data-2="{{$paket->fitur2}}" data-3="{{$paket->fitur3}}" data-4="{{$paket->fitur4}}" data-5="{{$paket->fitur5}}" data-6="{{$paket->fitur6}}" data-7="{{$paket->fitur7}}" data-8="{{$paket->fitur8}}" data-9="{{$paket->fitur9}}" data-10="{{$paket->fitur10}}">
                                      <i class="fas fa-edit"></i>
                                    </button>
                                  </td>
                                  <form action="{{route('Paket.destroy', $paket->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td>
                                      <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Menghapus Paket Ini ?')" style="font-size: 14px"><i class="far fa-trash-alt"></i></button>
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

  
  {{-- Modal Create --}}
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Paket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('Paket.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">   
            <div class="row">
              <div class="col">
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
                  <input class="form-check-input" type="checkbox" name="fitur1" value="Revisi Sepuasnya"   id="fitur1">
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
   <div class="modal fade" id="modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Paket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="form-edit">
          @method('PATCH')
          @csrf
        <div class="modal-body">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary btn-update">Simpan</button>
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
            
              });


        //  Modal Edit 
              
        $('.edit-fitur').on('click',function(){

         
            let route     = $(this).data('route');
            let id        = $(this).data('id');
            let namaFitur = $(this).data('namas');
            let harga     = $(this).data('harga');
            let diskon    = $(this).data('diskon');
            let data1     = $(this).data('1');
            let data2     = $(this).data('2');
            let data3     = $(this).data('3');
            let data4     = $(this).data('4');
            let data5     = $(this).data('5');
            let data6     = $(this).data('6');
            let data7     = $(this).data('7');
            let data8     = $(this).data('8');
            let data9     = $(this).data('9');
            let data10     = $(this).data('10');  
           
            $('#form-edit').attr('action', route);




            $.ajax({
                url   : `/Paket/${id}/edit `,
                method:"GET",
                success: function(data){
                    $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('show')
                },
                error:function(error){
                  console.log(error)
                }

            });

            
            
        });

        // End Modal Edit
        $('.btn-update').on('click',function(){

        // let id        = $('#form-edit').find('#id_data').val();
        // let editId    = document.getElementById('form-edit');
      
        // console.log(editId);



        // let formData  = $('#form-edit').serialize();
        // $.ajaxSetup({
          //     headers: {
          //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //     }
          // });

        // $.ajax({
        //     url   : `/Paket/${id}`,
        //     method:"PATCH",
        //     data:formData,
        //     dataType : 'json',
        //     success: function(data){
        //       console.log(data);
        //         // $('#modal-edit').find('.modal-body').html(data)
        //         // $('#modal-edit').modal('show')
        //     },
        //     error:function(error){
        //       console.log(error)
        //     }

        // })

        });
        // Update Edit

        // End Update Edit


      // Data Table 
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
        </script>



@endsection
           