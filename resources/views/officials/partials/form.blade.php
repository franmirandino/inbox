{{ csrf_field() }} 

<div class="col-md-12">
	<div class="col-md-4">
		<div class="form-group">
			<label for="pos">Pos: </label>
			<input type="text" name="pos" value="{{ $official->pos or old('pos') }}" class="form-control">
		</div>

		<div class="form-group">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" value="{{ $official->nombre or old('nombre') }}" class="form-control">
		</div>
	</div>

	<div class="col-md-4">	
		<div class="form-group">
			<label for="telefono">Telefono: </label>
			<input type="text" name="telefono" value="{{  $official->telefono  or old('telefono') }}" class="form-control">
		</div>

		<div class="form-group">
			<label for="telefono_2">Telefono 2: </label>
			<input type="text" name="telefono_2" value="{{ $official->telefono_2 or old('telefono_2') }}" class="form-control">
		</div>
	</div>

	<div class="col-md-4">	
		<div class="form-group">
			<label for="cargo">Cargo: </label>
			<input type="text" name="cargo" value="{{ $official->cargo or old('cargo') }}" class="form-control">
		</div>

		<div class="form-group">
			<label for="canal">Canal: </label>
			<input type="text" name="canal" value="{{ $official->canal or old('canal') }}" class="form-control">
		</div>
	</div>
</div>

