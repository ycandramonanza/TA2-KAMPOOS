<div class="row">
    <div class="col">
         <input type="hidden" value="{{$Paket->id}}" id="id_data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Gambar Paket</label>
        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"  aria-describedby="emailHelp">
        <img src="{{asset('storage/paket/'. $Paket->image)}}" alt="Background" width="70px">
        @error('image')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Paket</label>
        <input type="text" name="nama_paket" class="form-control @error('nama_paket') is-invalid @enderror" value="{{$Paket->nama_paket}}">
        @error('nama_paket')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{$Paket->harga}}">
        @error('harga')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga Diskon</label>
        <input type="text" name="harga_diskon" class="form-control @error('harga_diskon') is-invalid @enderror" value="{{$Paket->harga_diskon}}">
        @error('harga_diskon')
              <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur1">Fitur 1 :</label>
        <input class="form-check-input" type="checkbox" name="fitur1" value="{{$Paket->fitur1}}" {{old('fitur1') ?? $Paket->fitur1 == 'Revisi Sepuasnya' ? 'checked' : ''}}   id="fitur1">
        <label class="form-check-label" for="fitur1">
          Revisi Sepuasnya
        </label>
      </div>
            <label class="form-check-label" for="flexCheckDefault">Fitur 2 :</label>
      <div class="form-check">
            <input class="form-check-input" type="radio" name="fitur2" value="5 Foto Album" {{old('fitur2') ?? $Paket->fitur2 == '5 Foto Album' ? 'checked' : ''}} id="Fitur5Album">
            <label class="form-check-label" for="Fitur5Album">
            5 Foto Album,
            </label>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" name="fitur2" value="10 Foto Album" {{old('fitur2') ?? $Paket->fitur2 == '10 Foto Album' ? 'checked' : ''}} id="Fitur10Album">
            <label class="form-check-label" for="Fitur10Album">
            10 Foto Album,
            </label>
      </div>
      <div class="form-check">
            <input class="form-check-input" type="radio" name="fitur2" value="20 Foto Album" {{old('fitur2') ?? $Paket->fitur2 == '20 Foto Album' ? 'checked' : ''}} id="Fitur20Album">
            <label class="form-check-label" for="Fitur20Album">
            20 Foto Album
            </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur3">Fitur 3 :</label>
        <input class="form-check-input" type="checkbox" name="fitur3" value="Navigasi Lokasi" {{old('fitur3') ?? $Paket->fitur3 == 'Navigasi Lokasi' ? 'checked' : ''}} id="fitur3">
        <label class="form-check-label" for="fitur3">
          Navigasi Lokasi
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur4">Fitur 4 :</label>
        <input class="form-check-input" type="checkbox" name="fitur4" value="Hitung Mundur" {{old('fitur4') ?? $Paket->fitur4 == 'Hitung Mundur' ? 'checked' : ''}} id="fitur4">
        <label class="form-check-label" for="fitur4">
          Hitung Mundur
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur5">Fitur 5 :</label>
        <input class="form-check-input" type="checkbox" name="fitur5" value="Kolom Ucapan" {{old('fitur5') ?? $Paket->fitur5 == 'Kolom Ucapan' ? 'checked' : ''}} id="fitur5">
        <label class="form-check-label" for="fitur5">
          Kolom Ucapan
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur6">Fitur 6 :</label>
        <input class="form-check-input" type="checkbox" name="fitur6" value="Request Musik" {{old('fitur6') ?? $Paket->fitur6 == 'Request Musik' ? 'checked' : ''}} id="fitur6">
        <label class="form-check-label" for="fitur6">
          Request Musik
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur7">Fitur 7 :</label>
        <input class="form-check-input" type="checkbox" name="fitur7" value="Fitur Kepada" {{old('fitur7') ?? $Paket->fitur7 == 'Fitur Kepada' ? 'checked' : ''}} id="fitur7">
        <label class="form-check-label" for="fitur7">
          Fitur Kepada
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur8">Fitur 8 :</label>
        <input class="form-check-input" type="checkbox" name="fitur8" value="Video Gallery" {{old('fitur8') ?? $Paket->fitur8 == 'Video Gallery' ? 'checked' : ''}} id="fitur8">
        <label class="form-check-label" for="fitur8">
          Video Gallery
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur9">Fitur 9 :</label>
        <input class="form-check-input" type="checkbox" name="fitur9" value="Fitur Berikan Angpao" {{old('fitur9') ?? $Paket->fitur9 == 'Fitur Berikan Angpao' ? 'checked' : ''}} id="fitur9">
        <label class="form-check-label" for="fitur9">
          Fitur Berikan Angpao
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="fitur10">Fitur 10 :</label>
        <input class="form-check-input" type="checkbox" name="fitur10" value="Fitur RSVP (Konfirmasi kehadiran tamu)" {{old('fitur10') ?? $Paket->fitur10 == 'Fitur RSVP (Konfirmasi kehadiran tamu)' ? 'checked' : ''}} id="fitur10">
        <label class="form-check-label" for="fitur10">
          Fitur RSVP (Konfirmasi kehadiran tamu)
        </label>
      </div>
    </div>
  </div>