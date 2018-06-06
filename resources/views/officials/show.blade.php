@extends('layouts.layout')

@section('content')
	
	<div class="breadcrumb-holder">
		<div class="container-fluid">
		  <ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('officials.index') }}">Funcionarios</a></li>
		    <li class="breadcrumb-item active">Funcionario</li>
		  </ul>
		</div>
	</div>

	<section>
	    <div class="container-fluid">
			<header> 
				<h1 class="h3 display">Funcionario</h1>				
			</header>

		  	<div class="card">
		        <div class="card-body">
		        	
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

