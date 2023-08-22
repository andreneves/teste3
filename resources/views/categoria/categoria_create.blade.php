@extends('adminlte::page')

@section('content')
<div class="container">

Formulário de criação:<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/categoria/create') }}">

    @csrf

  <label class="form-label" for="nome">Nome:</label><br>
  <input class="form-control"type="text" name="nome"><br>

  <input  class="form-control" type="submit" value="ENVIAR">


</form>

</div>
@endsection
