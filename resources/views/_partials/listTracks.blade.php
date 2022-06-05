
<h3>Faixas do album <span>{{ $album->name }}</span></h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome da faixa</th>
      <th scope="col">Duração</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tracks as $track )
    <tr>
      <th scope="row">{{ $track->id }}</th>
      <td>{{ $track->tname }}</td>
      <td>{{ $track->duration }}</td>
      <td>
      <form action="{{ route('tracks.destroy', $track->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">
              Deletar a Faixa {{ $track->name }}
          </button>
      </form>
      </td>
  @endforeach
    </tr>
  </tbody>
</table>