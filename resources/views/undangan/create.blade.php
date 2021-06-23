@extends('master')
@section('content')
 {{-- Data Table --}}
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
               
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
            <div class="container">
              <form action="{{route('undangan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col">
                    <input type="hidden" name="invitation_id"  class="form-control" id="exampleFormControlInput1" value="{{$id->id}}">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image Background</label>
                        <input type="file" name="image"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pengantin 1</label>
                        <input type="text" name="nama_pengantin1"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pengantin 2</label>
                        <input type="text" name="nama_pengantin2"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Acara</label>
                        <input type="date" name="tanggal_acara"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Tempat Acara</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="tempat_acara" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Salam</label>
                        <input type="text" name="salam"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mukadimah</label>
                        <input type="text" name="mukadimah"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Keterangan 1</label>
                        <input type="text" name="keterangan_1"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Keterangan 2</label>
                        <input type="text" name="keterangan_2"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar 1</label>
                        <input type="file" name="gambar_1"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">gambar 2</label>
                        <input type="file" name="gambar_2"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Countdown</label>
                        <input type="date" name="countdown"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                          <button type="submit" class="btn btn-primary">Kirim</button>
                      </div>

                  </div>
              </form>
          </div>
            </div>

@endsection
           