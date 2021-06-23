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
                <div class="row">
                      <div class="col">
                        <div class="table-responsive">
                          <table id="tables" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengantin 1</th>
                                    <th>Nama Pengantin 2</th>
                                    <th>Tanggal Acara</th>
                                    <th>Tempat Acara</th>
                                    <th>Link Undangan</th>
                                    <th>Aksi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($undangans as $undangan)
                                  <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$undangan->nama_pengantin1}}</td>
                                      <td>{{$undangan->nama_pengantin2}}</td> 
                                      <td>{{$undangan->tanggal_acara}}</td>
                                      <td>{{$undangan->tempat_acara}}</td>
                                      <td>
                                            <a href="{{route('undangan', $undangan->invitation_id)}}"  class="btn btn-secondary">Link</a>
                                      </td>
                                      <td>
                                          <a href="" class="btn btn-success">Edit</a>
                                      </td>
                                      <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                      </td>
                                   </tr>  
                              @endforeach 
                            </tbody>
                        </table>
                        </div>
                      </div>
                </div>
          </div>

            <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>

            <script>
              $(document).ready( function () {
                  $('#tables').DataTable();
              } );
          </script>

@endsection
           