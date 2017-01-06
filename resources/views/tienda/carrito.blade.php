@extends('tienda.template')
@section('titulo', 'Carrito de compras')

@section('contenido')
<div class="container text-center">
<div class="page-header">
	<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1>
</div>
	<div class="tabla-carrito">
	@if(count($carrito))
		<p>
			<a href="{{route('carrito-vaciar')}}" class="btn btn-danger">Vaciar carrito <i class="fa fa-trash"></i></a>
		</p>
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($carrito as $item)
						<tr>
							<td><img src="{{asset($item->imagen)}}"></td>
							<td>{{$item->nombre}}</td>
							<td>{{$item->precio}}</td>
							<td>
								<input type="number" min="1" max="10" value="{{$item->cantidad}}" id="producto_{{$item->idproducto}}">
								<a href="#" class="btn btn-warning btn-update-item" data-href="{{route('carrito-actualizar',$item->idproducto)}}" data-id="{{$item->idproducto}}"><i class="fa fa-refresh"></i></a>
							</td>
							<td>{{number_format($item->precio * $item->cantidad,2)}}</td>
							<td><a href="{{route('carrito-borrar', $item->idproducto)}}" class="btn btn-danger"><i class="fa fa-remove"></a></td>
						</tr>
					@endforeach
				</tbody>
				
			</table>
			<hr>
			<h3><span class="label label-success">Total: ${{number_format($total,2)}}</span></h3>
		</div>
	@else
		<h3><span class="label label-warning">No hay productos en el carrito</span></h3>
	@endif
	<p>
		<a href="{{route('inicio')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i> Seguir Comprando
		</a>
		<a href="{{route('orden-detalles')}}" class="btn btn-primary">
			Continuar <i class="fa fa-chevron-circle-right"></i> 
		</a>
	</p>
	</div>
</div>

@endsection