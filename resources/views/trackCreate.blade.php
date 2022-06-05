@extends('layouts.app')

@section('title', 'Criar Nova Faixa')

@section('content')

<h3>Cadastrar nova Faixa</h3>
<hr><br>
@if ($errors->any())
   <ul>
       @foreach ( $errors->all() as $error)
            <li>{{ $error }}</li>
       @endforeach
   </ul>
@endif

<form action="{{ route('tracks.store') }}" method="post">
    @csrf
    <div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
        <div class="mb-3">
            <select class="form-select">
                @foreach($albums as $album)
                <option>{{ $album->name }}</option>
                @endforeach
            </select>
        </div>
    <div class="mb-3">
        <input type="text" name="tname" id="name" placeholder="Nome da Faixa" value="{{ old('tname') }}" aria-describedby="emailHelp">
        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <input type="text" name="duration" id="duration" placeholder="Duração" value="{{ old('duration') }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-sm btn-primary">Salvar Faixa</button>
    </div>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>
</form>



@endsection
