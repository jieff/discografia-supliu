@extends('layouts.app')

@section('title', 'Pesquisa por nome')

@section('content')

<h3>Album {{ $search->name }}</h3> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome do Album</th>
      <th scope="col">Ano</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $search->name }}</td>
      <td>{{ $search->year }}</td>
  </tbody>
</table>

@endsection
