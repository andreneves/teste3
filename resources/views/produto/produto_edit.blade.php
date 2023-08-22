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

  <label class="form-label" for="nome">Nome:</label><br>
  <input class="form-control" type="text" name="nome" value="{{ $produto->nome }}"><br>

  <label class="form-label" for="quantidade">Quantidade:</label><br>
  <input class="form-control" type="text" name="quantidade" value="{{ $produto->quantidade }}"><br>

  <label class="form-label" for="preco">Preço:</label><br>
  <input type="text" name="preco" value="{{ $produto->preco }}"><br>

  <input class="form-control" type="submit" value="ENVIAR">


</form>

</div>
@endsection
