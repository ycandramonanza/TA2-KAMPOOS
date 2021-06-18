@extends('master')
@section('content')
 {{-- Data Table --}}
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
                <div class="row">
                    <div class="col">
                        <button style="font-size: 14px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fas fa-plus"></i> Tambah Fitur
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
                                  <th>Nama Pembeli</th>
                                  <th>Paket</th>
                                  <th>Tempat Acara</th>
                                  <th>Tanggal Acara</th>
                                  <th>Confirm</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($orders as $order)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$order->nama}}</td>
                                  <td>{{$order->paket}}</td>
                                  <td>{{$order->tempat_acara}}</td>
                                  <td>{{$order->tanggal_acara}}</td>
                                  <form action="{{route('Invitation.store')}}" method="POST">
                                    @csrf
                                  <td>
                                    <input type="hidden" name="nama" value="{{$order->nama}}">
                                    <button type="submit" onclick="return confirm('Apakah Order ini akan di Lanjut ?')" class="btn btn-success">
                                            Konfirmasi
                                      </button>
                                  </td>
                                </form>
                                  <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <td>
                                      <button onclick="return confirm('Apakah Kamu Yakin Menghapus Fitur Ini ?')">Hapus</button>
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
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Fitur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('Fitur.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar Fitur</label>
                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  aria-describedby="emailHelp">
                  @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Fitur</label>
                  <input type="text" name="nama_fitur" class="form-control @error('nama_fitur') is-invalid @enderror">
                  @error('nama_fitur')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('nama_fitur') is-invalid @enderror" name="desc"  cols="30" rows="10"></textarea>
                    @error('desc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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


   <!-- Modal Edit-->
    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Fitur</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="route">
          @method('PATCH')
            @csrf
        <div class="modal-body">
                <input type="hidden" id="id" name="id" class="form-control"  aria-describedby="emailHelp">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar Fitur</label>
                  <input type="file"  name="image" class="form-control" aria-describedby="emailHelp">
                  <br>
                  <span style="font-size: 12px">Gambar Fitur Sebelumnya :</span>
                  <img src="" id="image" width="50px" alt="">
              
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Fitur</label>
                  <input type="text" id="namaFitur"    name="nama_fitur" class="form-control" >
                  <span class="text-danger error-text name_error"></span>
                 
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"   class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="desc"  id="desc" cols="30" rows="10"></textarea>
                    <span class="text-danger error-text desc_error"></span>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
   {{-- end Modal Edit --}}


        {{-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> --}}
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

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

            // var tes = document.getElementById('route');
            // console.log(tes);
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
           