@extends('layouts.app')

@section('title', 'Criar Novo Álbum')

@section('content')



<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
    <h3>Cadastrar novo Album</h3>
    <hr><br>
        @if ($errors->any())
        <ul>
            @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
            <div class="input-group mb-3">
            <form action="{{ route('albums.store') }}" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nome do Album" value="{{ old('name') }}">
            <input type="text" name="year" id="year" placeholder="Ano" value="{{ old('year') }}"><hr>
            <button type="submit" class="btn btn-sm btn-primary">Salvar Album</button>
            </form>
            </div>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>

@endsection
