@extends('adminlte::page')

@section('content')
<div class="container">

Categoria<br>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<script>
  function ConfirmDelete() {
    return confirm('Tem certeza que deseja excluir este registro?');
  }
</script>

<a class="btn btn-success" href="{{ url('/categoria/create') }}">CRIAR</a><br>

<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
  </tr>

@foreach ($categorias as $categoria)
  <tr>
    <td>{{ $categoria->id }}</td>
    <td>{{ $categoria->nome }}</td>
    <td>
      
      <a class="btn btn-primary" href="{{ url('/categoria/' . $categoria->id) }}">VISUALIZAR</a>
      
      <a class="btn btn-warning" href="{{ url('/categoria/' . $categoria->id . '/edit') }}">EDITAR</a>
      
      <form method="POST" action="{{ url('/categoria/' . $categoria->id) }}" onsubmit = "return ConfirmDelete()">
        @method('DELETE')
        @csrf
        <input class="btn btn-danger" type="submit" value="EXCLUIR">
      </form>

    </td>
  </tr>
@endforeach

</table>

</div>
@endsection
