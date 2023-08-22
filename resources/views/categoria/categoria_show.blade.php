@extends('adminlte::page')

@section('content')
<div class="container">
<h1>Categoria</h1><br/>

<strong>Nome:</strong> {{ $categoria->nome }}<br>
<strong>Criação:</strong> {{ $categoria->created_at }}<br>


</div>
@endsection
