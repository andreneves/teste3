@extends('adminlte::page')

@section('content')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Produto', 'Quantidade'],
            @foreach ($produtos as $produto)
                ['{{ $produto->nome }}',     {{ $produto->quantidade }}],
            @endforeach
        ]);

        var options = {
          title: 'Meus Produtos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<div class="container">

<div class="row">
<div class="col">

<div class="small-box bg-info">
<div class="inner">
<h3>{{ $categoria_count }}</h3>
<p>Categoria</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="{{ url('/categoria') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col">

<div class="small-box bg-success">
<div class="inner">
<h3>{{ $produto_count }}</h3>
<p>Produto</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="{{ url('/produto') }}" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>


</div>

<div id="piechart" style="width: 450px; height: 250px;"></div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
