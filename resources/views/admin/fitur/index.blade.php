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
                                  <th>Gambar</th>
                                  <th>Fitur</th>
                                  <th>Deskripsi</th>
                                  <th>Aksi</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($fiturs as $fitur)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td><img src="{{asset('storage/fitur/'.$fitur->image)}}" width="80px" alt=""></td>
                                  <td>{{$fitur->nama_fitur}}</td>
                                  <td>{{$fitur->desc}}</td>
                                  <td>
                                    <button style="font-size: 14px;" id="cek" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" data-id = "{{$fitur->id}}" data-image = "{{asset('storage/fitur/'.$fitur->image)}}" data-namaFitur ="{{$fitur->nama_fitur}}" data-desc = "{{$fitur->desc}}">
                                      Edit
                                    </button>
                                  </td>
                                  <form action="{{route('Fitur.destroy', $fitur->id)}}" method="POST">
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
                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Fitur</label>
                  <input type="text" name="nama_fitur" class="form-control @error('nama_fitur') is-invalid @enderror" id="exampleInputPassword1">
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
        <div class="modal-body">
            <form action="{{route('Fitur.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Gambar Fitur</label>
                  <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" aria-describedby="emailHelp">
                  @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" id="namaFitur" class="form-label">Nama Fitur</label>
                  <input type="text" name="nama_fitur" class="form-control @error('nama_fitur') is-invalid @enderror" >
                  @error('nama_fitur')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" id="desc" class="form-label">Deskripsi</label>
                    <textarea class="form-control @error('desc') is-invalid @enderror" name="desc"  cols="30" rows="10"></textarea>
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
            
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script>
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
        </script>

        {{-- Modal Edit --}}
    <script>
      $(document).on("click", "#cek" ,function(){
          var id = $(this).data('id');
          var image = $(this).data('image');
          var namaFitur = $(this).data('namaFitur');
          var desc = $(this).data('desc');
          // console(desc)
          $('#id').text(id);
          $('#image').attr('src', image);
          $('#namaFitur').text(namaFitur);
          $('#desc').text(desc);
          
      })
  </script>
@endsection
      