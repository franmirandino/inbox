@extends('layouts.layout')

@section('content')

    <section class="content-header">
      <h1>
        Funcionarios
        <small>sección para ver el listado de los funcionarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Funcionario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


		  	<div class="box box-danger">
	  			<div class="box-header"> 		  				              
					<a href="{{ route('officials.create') }}" class="btn btn-sm btn-danger pull-right"><i class="fa fa-plus"></i> Ingresar</a>

	            </div>			
	
		        <div class="box-body">

		                <table id="funcionario" class="table table-striped table-hover">
		                    <thead>
		    	                <tr>
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
			                    		<td>{{ $official->pos }}</td>
			                    		<td>{{ $official->nombre }}</td>
			                    		<td>{{ $official->telefono }}</td>
			                    		<td>{{ $official->cargo }}</td>
			                    		<td>{{ $official->canal }}</td>
			                    		<td>
						                    <a href="{{ route('officials.show', $official ) }}" class="btn btn-xs btn-default">
						                      <i class="fa fa-eye"></i>
						                    </a>
						                
						                    <a href="{{ route('officials.edit', $official ) }}" class="btn btn-xs btn-success	">
						                      <i class="fa fa-pencil"></i>
						                    </a>
						                
						                    <form method="POST" action="{{ route('officials.destroy', $official) }}" style="display: inline;">
                          						{{ csrf_field() }} {{ method_field('DELETE') }}
							                    <button class="btn btn-xs btn-warning"  >
							                	   <i class="fa fa-times"></i>
							                    </button>
						                    {!! Form::close() !!}
						                  </td>
			                    	</tr>
			                    @endforeach
		                    </tbody>
		                </table>

		        </div>
		    </div>

    </section>	


@endsection

@push('styles')
   <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('script')
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $('#funcionario').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
      });
    });
  </script>
@endpush