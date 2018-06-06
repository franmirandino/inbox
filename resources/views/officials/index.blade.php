@extends('layouts.layout')

@section('content')
	
	<div class="breadcrumb-holder">
		<div class="container-fluid">
		  <ul class="breadcrumb">
		    <li class="breadcrumb-item"><a href="/">Home</a></li>
		    <li class="breadcrumb-item active">Funcionarios</li>
		  </ul>
		</div>
	</div>
	<section>
	    <div class="container-fluid">
			<header> 
				<h1 class="h3 display">Funcionarios</h1>
				<a href="{{ route('officials.create') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Ingresar</a>
			</header>
			<br>

		  	<div class="card">
		        <div class="card-body">
		            <div class="table-responsive">
		                <table id="datatable" class="table table-striped table-hover datatable">
		                    <thead>
		    	                <tr>
		                          <th>ID</th>
		                          <th>POS</th>
		                          <th>NOMBRE</th>
		                          <th>TELEFONO</th>
		                          <th>CARGO</th>
		                          <th>CANAL</th>			                                               
		                          <th>ACCIONES</th>			                                               
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($officials as $official)
			                    	<tr>
			                    		<td>{{ $official->id }}</td>
			                    		<td>{{ $official->pos }}</td>
			                    		<td>{{ $official->nombre }}</td>
			                    		<td>{{ $official->telefono }}</td>
			                    		<td>{{ $official->cargo }}</td>
			                    		<td>{{ $official->canal }}</td>
			                    		<td width="10px">
						                    <a href="{{ route('officials.show', $official ) }}" class="btn btn-sm btn-default">
						                      Ver
						                    </a>
						                </td>
						                <td width="10px">
						                    <a href="{{ route('officials.edit', $official ) }}" class="btn btn-sm btn-default">
						                      Editar
						                    </a>
						                </td>
						                <td width="10px">
						                    {!! Form::open(['route' => ['officials.destroy', $official], 'method' => 'DELETE']) !!}
							                    <button class="btn btn-sm btn-danger">
							                	    Eliminar
							                    </button>
						                    {!! Form::close() !!}
						                  </td>
			                    	</tr>
			                    @endforeach
		                    </tbody>
		                </table>
		                {{ $officials->links() }}
		            </div>
		        </div>
		    </div>
	    </div>
    </section>


@endsection
