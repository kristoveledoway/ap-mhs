@extends('mahasiswa.layout')
@extends('template.navbar')
@section('content')
  <br>
  <div class="box-table">
  @foreach($mahasiswa as $edit)
  <form class="" action="/mahasiswa/{{ $edit->id }}" method="post">
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
    <input type="hidden" name="_method" value="put">
    <label for="">Nama</label><br>
    <input type="text" name="nama" value="{{ $edit->nama }}" placeholder="Nama" class="form-control"><br>
    <label for="">Fakultas</label><br>
    <select class="form-control" name="fakultas_id"><br>
      <!-- <option disabled selected hidden>{{ $edit->fakultas }}</option>
      @foreach($fakultas as $data)
        <option value="{{ $data->id_fakultas }}">{{ $data->fakultas }}</option>
      @endforeach -->
      @foreach($fakultas as $data)
        <option disabled selected hidden>{{ $edit->fakultas }}</option>
        <?php
        if ($data->id_fakultas == $edit->fakultas_id) { ?>
          <option selected value="{{ $data->id_fakultas }}">{{ $data->fakultas }}</option>
        <?php } else { ?>
          <option value="{{ $data->id_fakultas }}">{{ $data->fakultas }}</option>
        <?php } ?>
      @endforeach
    </select><br>
    <label for="">NPM</label><br>
    <input type="text" class="form-control" name="npm" value="{{ $edit->npm }}" placeholder="NPM"><br>
    <label for="">Program Jurusan</label><br>
    <select class="form-control" name="prodi_id" required>
      @foreach($prodi as $data)
        <option disabled selected hidden>{{ $edit->prodi }}</option>
        <?php
        if ($data->id_prodi == $edit->prodi_id) { ?>
          <option selected value="{{ $data->id_prodi }}">{{ $data->prodi }}</option>
        <?php } else { ?>
          <option value="{{ $data->id_prodi }}">{{ $data->prodi }}</option>
        <?php } ?>
      @endforeach
    </select><br>
    <label for="">Alamat</label><br>
    <textarea class="form-control" name="alamat" rows="8" cols="40" placeholder="Alamat">{{ $edit->alamat }}</textarea><br>
    <label for="">Nomor Telepon</label>
    <input type="text" class="form-control" name="telp" value="{{ $edit->telp }}" placeholder="Nomor Telepon"><br>
    <input type="submit" value="Simpan Data" class="btn">
  </form>
  @endforeach
  </div>
  <br>
@endsection
