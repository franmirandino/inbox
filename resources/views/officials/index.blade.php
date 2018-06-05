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
				<a href="{{ route('funcionarios.create') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Ingresar</a>
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
		                </table>
		            </div>
		        </div>
		    </div>
	    </div>
    </section>


@endsection

@push('scripts')
  	<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
	    var table = $('#datatable').DataTable({
	        processing: true,
	        serverSide: true,       
	        ajax: '{{ route('officials/getData') }}',
	        columns: [
	            {data: 'id', name: 'ID'},	
	            {data: 'pos', name: 'POS'},
	            {data: 'nombre', name: 'NOMBRE'},
	            {data: 'telefono', name: 'TELEFONO'},
	            {data: 'cargo', name: 'CARGO'},
	            {data: 'canal', name: 'CANAL'},	   
	            {defaultContent: "<button class='btn btn-sm btn-default'>Editar</button>"}	                    	           	   	                   
	        ],
	    });

	    $('#datatable tbody').on( 'click', 'button', function () {
	        var data = table.row( $(this).parents('tr') ).data();
	        	 window.location.replace("funcionarios/"+data.id+"/edit");
    	} );


	});
	</script>
@endpush