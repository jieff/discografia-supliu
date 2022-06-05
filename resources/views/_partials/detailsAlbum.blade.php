<h3>Detalhes do Album{{ $album->name }}</h3> 
<br>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
    <ul>
        <li><strong>Nome:</strong> {{ $album->name }}</li>
        <li><strong>Ano: </strong>{{ $album->year }}</li>
    </ul>

    <form action="{{ route('albums.destroy', $album->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">
        <i class="fa-solid fa-user"></i>
            Deletar o Album {{ $album->name }}
        </button>
    </form>

    </div>
    <div class="col">
      
    </div>
  </div>
</div>
<hr>