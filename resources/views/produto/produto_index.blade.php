@extends('adminlte::page')

@section('content')
<div class="container">

Produtos<br>

<table>
  <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
  </tr>

@foreach ($produtos as $produto)
  <tr>
    <td>{{ $produto->nome }}</td>
    <td>{{ $produto->preco }}</td>
    <td>{{ $produto->quantidade }}</td>
  </tr>
@endforeach

</table>

</div>
@endsection
