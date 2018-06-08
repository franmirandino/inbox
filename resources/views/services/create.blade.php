@extends('layouts.layout')

@section('content')

	<h1>Ingresar planilla de servicios</h1>

<form method="POST" action="{{ route('services/import') }}"  enctype="multipart/form-data">
	{{ csrf_field() }}
  <div class="form-group">  	
    <label for="file">Servicios</label>
    <input type="file" name="import_file" class="form-control-file" >    
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


@endsection
