@extends('mahasiswa.layout')
@extends('template.navbar')
@section('content')
  <br>
  <div class="box-table">
  <form class="" action="/mahasiswa" method="post">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="">Nama</label><br>
    <input type="text" name="nama" value="" placeholder="Nama" class="form-control"><br>
    <label for="">NPM</label>
    <input type="text" name="npm" value="" placeholder="NPM" class="form-control"><br>
    <label for="">Fakultas</label><br>
    <select class="form-control" name="fakultas_id"><br>
      <option disabled selected hidden>Pilih Fakultas</option>
      @foreach($fakultas as $data)
        <option value="{{ $data->id_fakultas }}">{{ $data->fakultas }}</option>
      @endforeach
    </select><br>
    <label for="">Program Jurusan</label><br>
    <select class="form-control" name="prodi_id" required>
      <option disabled selected hidden>Pilih Data</option>
      @foreach($prodi as $data)
        <option value="{{ $data->id_prodi }}">{{ $data->prodi }}</option>
      @endforeach
    </select><br>
    <label for="">Alamat</label><br>
    <textarea class="form-control" name="alamat" rows="8" cols="40" placeholder="Alamat"></textarea><br>
    <label for="">Nomor Telepon</label>
    <input type="text" class="form-control" name="telp" value="" placeholder="Nomor Telepon"><br>
    <input type="submit" value="Simpan Data" class="btn">
  </form>
  </div>
  <br>
@endsection
