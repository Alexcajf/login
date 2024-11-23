<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_de_equipo" class="form-label">{{ __('Nombre De Equipo') }}</label>
            <input type="text" name="Nombre de equipo" class="form-control @error('Nombre de equipo') is-invalid @enderror" value="{{ old('Nombre de equipo', $equipo?->Nombre de equipo) }}" id="nombre_de_equipo" placeholder="Nombre De Equipo">
            {!! $errors->first('Nombre de equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="posicion_o_lugar" class="form-label">{{ __('Posicion O Lugar') }}</label>
            <input type="text" name="posicion o lugar" class="form-control @error('posicion o lugar') is-invalid @enderror" value="{{ old('posicion o lugar', $equipo?->posicion o lugar) }}" id="posicion_o_lugar" placeholder="Posicion O Lugar">
            {!! $errors->first('posicion o lugar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>