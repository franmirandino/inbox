@extends('layouts.layout')

@section('content')

    <section class="content-header">
      <h1>
        Servicios
        <small>sección para ver el listado de los servicios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Servicios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


		  	<div class="box box-danger">
	  			<div class="box-header"> 		  				              
					<a href="{{ route('services.create') }}" class="btn btn-sm btn-danger pull-right"><i class="fa fa-plus"></i> Ingresar</a>

	            </div>			
	
		        <div class="box-body">

		                <table id="servicios" class="table table-striped table-hover">
		                    <thead>
		    	                <tr>
		                          <th>NRO. SERVICIO</th>
		                          <th>NRO. SOLICITUD</th>
		                          <th>MOTIVO</th>
		                          <th>LUGAR</th>			                                               
		                          <th>REGION</th>			                                               
		                          <th>TÉCNICO</th>			                                               
		                          <th>AYUDANTE</th>	
		                          <th>ACCIONES</th>			                                               
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($services as $service)
			                    	<tr>
			                    		<td>{{ $service->nro_servicio }}</td>
			                    		<td>{{ $service->nro_solicitud }}</td>
			                    		<td>{{ $service->motivo }}</td>
			                    		<td>{{ $service->lugar }}</td>
			                    		<td>{{ $service->region }}</td>
			                    		<td>null</td>
			                    		<td>null</td>
			                    		<td>
						                    <a href="{{ route('services.show', $service ) }}" class="btn btn-xs btn-default">
						                      <i class="fa fa-eye"></i>
						                    </a>
						                
						                    <a href="{{ route('services.edit', $service ) }}" class="btn btn-xs btn-success	">
						                      <i class="fa fa-pencil"></i>
						                    </a>
						                
						                    <form method="POST" action="{{ route('services.destroy', $service) }}" style="display: inline;">
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
      $('#servicios').DataTable({
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