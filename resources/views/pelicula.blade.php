@extends('cinestar')


@section('contenido-interno')
<br/><h1>Cartelera</h1><br/>


				<div class="contenido-pelicula">
					<div class="datos-pelicula">
						<h2>{{$pelicula[0]->Titulo}}</h2>
						<p></p>
						<br/>
						<div class="tabla">
							<div class="fila">
								<div class="celda-titulo">Título Original :</div>
								<div class="celda">{{$pelicula[0]->Titulo}}</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Estreno :</div>
								<div class="celda">{{$pelicula[0]->Estreno}}</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Género :</div>
								<div class="celda">{{$pelicula[0]->Genero}}</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Director :</div>
								<div class="celda">{{$pelicula[0]->Director}}</div>
							</div>
							<div class="fila">
								<div class="celda-titulo">Reparto :</div>
								<div class="celda">{{$pelicula[0]->Reparto}}</div>
							</div>
						</div>
					</div>
					<img src="img/pelicula/{{$pelicula[0]->id}}" width="160" height="226"><br/><br/>
				</div>
				<div class="pelicula-video">
					<embed src="https://www.youtube.com/v/{{$pelicula[0]->link}}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
				</div>

@endsection
