@extends('mahasiswa.layout')

@extends('template.navbar')

@section('content')
<br>
<style media="screen">
  .hidden {
    opacity:1;
    transition:opacity 500ms;
  }
  .hidden.bimsalabimilang {
    opacity:0;
  }
</style>
      <div class="box-table">
      <div class="panel panel-default">
        <script type="text/javascript">
        setTimeout(function(){
          document.getElementById('hiding').className = 'bimsalabimilang';
        }, 600);
        </script>
      <div class="panel-heading">
        Data Mahasiswa
        <div class="hidden btn-success" id="hiding" style="float:right;color:green">
            {{ Session::get('message') }}
        </div>
      </div>
      <table class="table">
        <tr>
          <td>No.</td>
          <td>Nama</td>
          <td>Fakultas</td>
          <td>Modify</td>
        </tr>

        <?php
        $no = 1;
        foreach ($mahasiswa as $data) {
         ?>
           <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->fakultas }}</td>
              <td style="text-align:center;">
                <a href="/mahasiswa/{{$data->id}}"><i title="Detail" class="glyphicon glyphicon-list-alt"></i></a> &nbsp;
                <a href="/mahasiswa/{{$data->id}}/edit"><i title="Edit" class="glyphicon glyphicon-edit"></i></a> &nbsp;
                <a href="/mahasiswa/{{ $data->id }}/destroy/">
                  <i title="Delete" class="glyphicon glyphicon-trash"></i>
                </a>
              </td>
          </tr>
        <?php } ?>
        </table>
      </div>
      <a href="/mahasiswa/create" style="link-decoration:none; color:#fff;">
        <button type="button" class="btn btn-default navbar-btn">New Post</button>
      </a>
      </div>

@endsection

@section('script')
  <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/npm.min.js') !!}"></script>
@endsection
