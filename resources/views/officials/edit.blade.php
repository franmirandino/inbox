@extends('layouts.layout')

@section('content')
	
	<div class="breadcrumb-holder">
		<div class="container-fluid">
		  <ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('officials.index') }}">Funcionarios</a></li>
		    <li class="breadcrumb-item active">Editar</li>
		  </ul>
		</div>
	</div>

	<section>
	    <div class="container-fluid">
			<header> 
				<h1 class="h3 display">Actualizar Funcionario</h1>				
			</header>

		  	<div class="card">
		        <div class="card-body">
		        	
		            <form action="{{ route('officials.update', $official) }}" method="POST">
		            	{{ method_field('PUT') }}
		            	
		            	@include('officials.partials.form')

		            	<button class="btn btn-primary btn-block">Ingresar</button>
		            </form>		            	

		        </div>
		    </div>
	    </div>
    </section>


@endsection