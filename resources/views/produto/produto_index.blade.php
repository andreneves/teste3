@extends('adminlte::page')

@section('content')
<div class="container">

Produtos<br>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<a href="{{ url('/produto/create') }}">CRIAR</a><br>

<table>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Ações</th>
  </tr>

@foreach ($produtos as $produto)
  <tr>
    <td>{{ $produto->id }}</td>
    <td>{{ $produto->nome }}</td>
    <td>{{ $produto->preco }}</td>
    <td>{{ $produto->quantidade }}</td>
    <td>
      <a href="{{ url('/produto/' . $produto->id) }}">VISUALIZAR</a>
      <a href="{{ url('/produto/' . $produto->id . '/edit') }}">EDITAR</a>
    
    
    </td>
  </tr>
@endforeach

</table>

</div>
@endsection
