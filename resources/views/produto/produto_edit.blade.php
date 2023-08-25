@extends('adminlte::page')

@section('content')
<div class="container">

Formulário de edição:<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/produto/' . $produto->id) }}">
    @method('PUT')
    @csrf

<select class="form-control" name="categoria_id" id="categoria_id">
    @foreach ($categorias as $categoria)
        @if ($categoria->id == $produto->categoria_id)
            <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
        @else
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endif
    @endforeach
</select>

  <label class="form-label" for="nome">Nome:</label><br>
  <input class="form-control" type="text" name="nome" value="{{ $produto->nome }}"><br>

  <label class="form-label" for="quantidade">Quantidade:</label><br>
  <input class="form-control" type="text" name="quantidade" value="{{ $produto->quantidade }}"><br>

  <label class="form-label" for="preco">Preço:</label><br>
  <input class="form-control" type="text" name="preco" value="{{ $produto->preco }}"><br>

  <input class="form-control" type="submit" value="ENVIAR">


</form>

</div>
@endsection
