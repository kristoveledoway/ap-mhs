@extends('mahasiswa.layout')
@extends('template.navbar')
@section('content')
  <br>
  @foreach($detail_mahasiswa as $mahasiswa)
  <div class="box-table">
  <div class="panel panel-default">
    <div class="panel-heading" style="overflow:hidden">
        Detail Mahasiswa <b> {{ $mahasiswa->nama }} </b>
    </div>
    <div style="padding:10px;width:100%;">
      <table class="table table-bordered">
      <tbody>
        <div class="" style="width:100%;text-align:center;padding:10px;float:left;">
          <img src="{{ asset('image/white_hat1.png') }}" style="width:30%;box-shadow:0px 0px 10px #ccc;margin-bottom:15px;"/>
        </div>
        <tr>
          <td style="font-weight:bold;">Nama</td>
          <td>{{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
          <td style="font-weight:bold">NPM</td>
          <td>{{ $mahasiswa->npm }}</td>
        </tr>
        <tr>
          <td style="font-weight:bold;">Fakultas</td>
          <td>{{ $mahasiswa->fakultas }}</td>
        </tr>
        <tr>
          <td style="font-weight:bold;">Program Jurusan</td>
          <td>{{ $mahasiswa->prodi }}</td>
        </tr>
        <tr>
          <td style="font-weight:bold;">Alamat</td>
          <td>{{ $mahasiswa->alamat }}</td>
        </tr>
        <tr>
          <td style="font-weight:bold;">No. Telp</td>
          <td>{{ $mahasiswa->telp }}</td>
        </tr>
      </tbody>
    </table>
    <a onclick="window.history.go(-1)" class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
    <a class="btn btn-success" href="/mahasiswa/{{$mahasiswa->id}}/edit" style="">Edit</a>
    <a class="btn btn-danger" href="/mahasiswa/{{$mahasiswa->id}}/destroy" style="">Delete</a>
    </div>
    </div>
  </div>
  </div>
  <br>
  @endforeach
@endsection
