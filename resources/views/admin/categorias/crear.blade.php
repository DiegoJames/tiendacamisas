@extends('admin.template')
@section('titulo', 'Admin de categorias')

@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> CATEGORIAS <small>[Agregar Categoria]</small></h1>
	</div>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="contenidos">
				{!! Form::open(['route' => 'categorias.store']) !!}
				    
					<div class="form-group">
						<label for="nombre">Nombre </label>
						{!! Form::text('nombre', null, array(
								'class'=>'form-control',
								'placeholder'=>'Ingresa el nombre...',
							))
						!!}
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción </label>
						{!! Form::textarea('descripcion', null, array(
								'class'=>'form-control',
							))
						!!}
					</div>
					<div class="form-group">
						{!! Form::submit('Guardar', array(
								'class'=>'btn btn-primary',
							)) 
						!!}
						<a href="{{route('categorias.index')}}" class="btn btn-warning">Cancelar</a>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop