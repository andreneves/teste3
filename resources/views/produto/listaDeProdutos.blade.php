@extends('layouts.app')

@section('content')
    		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Lista de produtos</h2>
					</header>
					<div class="row">
                    @foreach ($produtos as $produto)
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<h3><a href="#">{{ $produto->nome }}</a></h3>
								<p>R$ {{ $produto->preco }}</p>
							</article>
						</div>
                    @endforeach

					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button large scrolly">Get in touch with me</a>
					</footer>
				</div>
			</article>
@endsection