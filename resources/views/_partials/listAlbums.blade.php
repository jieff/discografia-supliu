<div class="container">
  <div class="row">
    @foreach($albums as $album)
    <div class="col-sm-6">
    {{ $album->name }}, {{ $album->year }} 
    </div>
    <div class="col-sm-6">
    [<a href="{{ route('albums.show', $album->id) }}">Ver</a>] 
    </div>
    @endforeach
  </div>
</div>