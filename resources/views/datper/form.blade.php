<div class="row padding-1 p-1">

    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="no_historia" class="form-label">{{ __('Historia') }}</label>
            <input type="text" name="no_historia" class="form-control @error('no_historia') is-invalid @enderror" value="{{ old('no_historia', $datper?->no_historia) }}" id="no_historia" placeholder="Historia">
            {!! $errors->first('no_historia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c_i" class="form-label">{{ __('Cedula de identidad') }}</label>
            <input type="text" name="CI" class="form-control @error('CI') is-invalid @enderror" value="{{ old('CI', $datper?->CI) }}" id="c_i" placeholder="Cedula de identidad">
            {!! $errors->first('CI', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre1" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre1" class="form-control @error('nombre1') is-invalid @enderror" value="{{ old('nombre1', $datper?->nombre1) }}" id="nombre1" placeholder="Nombre">
            {!! $errors->first('nombre1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="appaterno" class="form-label">{{ __('Apellido paterno') }}</label>
            <input type="text" name="appaterno" class="form-control @error('appaterno') is-invalid @enderror" value="{{ old('appaterno', $datper?->appaterno) }}" id="appaterno" placeholder="Apellido paterno">
            {!! $errors->first('appaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apmaterno" class="form-label">{{ __('Apellido materno') }}</label>
            <input type="text" name="apmaterno" class="form-control @error('apmaterno') is-invalid @enderror" value="{{ old('apmaterno', $datper?->apmaterno) }}" id="apmaterno" placeholder="Apellido materno">
            {!! $errors->first('apmaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $datper?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="est_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <input type="text" name="est_civil" class="form-control @error('est_civil') is-invalid @enderror" value="{{ old('est_civil', $datper?->est_civil) }}" id="est_civil" placeholder="Estado Civil">
            {!! $errors->first('est_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fec_nac" class="form-label">{{ __('Fecha de Nacimiento') }}</label>
            <input type="text" name="fec_nac" class="form-control @error('fec_nac') is-invalid @enderror" value="{{ old('fec_nac', $datper?->fec_nac) }}" id="fec_nac" placeholder="Fecha de Nacimiento">
            {!! $errors->first('fec_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $datper?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fono" class="form-label">{{ __('telefono') }}</label>
            <input type="text" name="fono" class="form-control @error('fono') is-invalid @enderror" value="{{ old('fono', $datper?->fono) }}" id="fono" placeholder="telefono">
            {!! $errors->first('fono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fono2" class="form-label">{{ __('telefono de referencia') }}</label>
            <input type="text" name="fono2" class="form-control @error('fono2') is-invalid @enderror" value="{{ old('fono2', $datper?->fono2) }}" id="fono2" placeholder="Referencia">
            {!! $errors->first('fono2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $datper?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad" class="form-label">{{ __('Ciudad') }}</label>
            <input type="text" name="ciudad" class="form-control @error('ciudad') is-invalid @enderror" value="{{ old('ciudad', $datper?->ciudad) }}" id="ciudad" placeholder="Ciudad">
            {!! $errors->first('ciudad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>