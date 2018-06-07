@extends('layouts.layout')

@section('content')
	
    <section class="content-header">
      <h1>
        Funcionarios
        <small>sección para ingresar los datos del funcionario</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="{{ route('officials.index') }}"><i class="ion ion-ios-people-outline"></i> Funcionario</a></li>
        <li class="active">Ingresar</li>
      </ol>
    </section>

	<section class="content">
	    <div class="box box-danger">
			<div class="box-header"> 
				<h1 class="h3 display">Ingresar Datos</h1>				
			</div>
  	
	        <div class="box-body">
	        	
	            <form action="{{ route('officials.store') }}" method="POST">	            	
	            	
	            	@include('officials.partials.form')

	            	<button class="btn btn-danger btn-block">Ingresar</button>
	            </form>		            	
	        </div>		    
	    </div>
    </section>


@endsection

