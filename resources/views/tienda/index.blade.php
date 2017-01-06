@extends('tienda.template')
@section('titulo', 'Listado de productos')

@section('contenido')
@include('tienda.secciones.slider')
<hr>

<div class="container text-center">
	<div id="productos">
		@foreach($productos as $producto)
			<div class="white-panel">
			 <div class="panel">
				<h2>{{$producto->nombre}}</h2>
				<p><img src="{{$producto->imagen}}" width="200"></p>
					<h3>Precio: ${{$producto->precio}}</h3>
					<p>{{$producto->descripcion}}</p>
					<p>
						<a class="btn btn-warning" href="{{route('carrito-agregar',$producto->idproducto)}}"><i class="fa fa-shopping-cart"></i> Comprar</a>
						<a class="btn btn-primary" href="{{route('producto-detalles',$producto->idproducto)}}">Ver más</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>

</div>

@endsection
