<form action="{{ route('albums.search') }}" method="post">
    @csrf 
    <div class="container">
        <div class="row">
            <div class="col-sm-8"><br>
            <label for="name">Digite uma palavra chave</label>
            <input type="text" class="form-control" name="name" id="search" placeholder="Pesquisa Álbum por nome" value="{{ old('name') }}">
            </div>
            <div class="col-sm-4"><br><br>
                <button type="submit" class="btn btn-primary">Procurar</button>
            </div>
        </div>
    </div>
</form><br>
