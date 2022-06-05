<nav class="navbar bg-light">
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <a class="navbar-brand" href="#">
                <img src="{{ URL::asset('images/logo.png') }}" alt="logo">
            </a>
        </div>
        <div class="col-sm-1"> <a href="{{ route('albums.index') }}">Home</a> </div>
        <div class="col-sm-2"><a href="{{ route('album.create') }}">Add Álbum</a></div>
        <div class="col-sm-2"><a href="{{ route('track.create') }}">Add Faixa</a>
        </div>
        <div class="col-sm-1">
            <h1>Discografia</h1>
        </div>   
    </div>
</div>
</nav>