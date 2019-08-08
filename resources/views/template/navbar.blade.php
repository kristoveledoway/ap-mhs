@section('style')
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" media="screen" title="no title" charset="utf-8">
@endsection

@section('navbar')
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> <a class="navbar-brand" href="#">AppMahasiswa</a> </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/mahasiswa/create">New</a></li>
          </ul>
        </div>
      </div>
    </nav>
@endsection
