{{ csrf_field() }} 

<div class="form-group">
	<label for="pos">Pos: </label>
	<input type="text" name="pos" value="{{ old('pos') }}" class="form-control">
</div>

<div class="form-group">
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control">
</div>

<div class="form-group">
	<label for="telefono">Telefono: </label>
	<input type="text" name="telefono" value="{{ old('telefono') }}" class="form-control">
</div>

<div class="form-group">
	<label for="telefono_2">Telefono 2: </label>
	<input type="text" name="telefono_2" value="{{ old('telefono_2') }}" class="form-control">
</div>

<div class="form-group">
	<label for="cargo">Cargo: </label>
	<input type="text" name="cargo" value="{{ old('cargo') }}" class="form-control">
</div>

<div class="form-group">
	<label for="canal">Canal: </label>
	<input type="text" name="canal" value="{{ old('canal') }}" class="form-control">
</div>