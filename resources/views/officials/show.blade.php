@extends('layouts.layout')

@section('content')
	
    <section class="content-header">
      <h1>
        Funcionarios
        <small>sección para ver los datos del funcionario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('officials.index') }}"><i class="ion ion-ios-people-outline"></i> Funcionario</a></li>
        <li class="active">{{ $official->nombre }}</li>
      </ol>
    </section>
	
	<section class="content">		
	    <div class="col-md-3">
			<div class="box box-danger">

				<div class="box-header with-border">
					<h3 class="box-title">Datos personales</h3>
				</div>

				<div class="box-body">
					<p><strong>Pos: </strong>{{ $official->pos }}</p>
		            <p><strong>Nombre: </strong>{{ $official->nombre }}</p>
		            <p><strong>Telefono: </strong>{{ $official->telefono }}</p>
		            <p><strong>Telefono 2: </strong>{{ $official->telefono_2 }}</p>		            
		            <p><strong>Cargo: </strong>{{ $official->cargo }}</p>
		            <p><strong>Canal: </strong>{{ $official->canal }}</p>
				</div>
			</div>
		</div>
	</section>

@endsection

