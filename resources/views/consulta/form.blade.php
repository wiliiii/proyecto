<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="num_historia" class="form-label">{{ __('Numero Historia') }}</label>
            <input type="text" name="num_historia" class="form-control @error('num_historia') is-invalid @enderror" value="{{ old('num_historia', $consulta?->num_historia) }}" id="num_historia" placeholder="Numero Historia">
            {!! $errors->first('num_historia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="no_consulta" class="form-label">{{ __('Consulta') }}</label>
            <input type="text" name="no_consulta" class="form-control @error('no_consulta') is-invalid @enderror" value="{{ old('no_consulta', $consulta?->no_consulta) }}" id="no_consulta" placeholder="No Consulta">
            {!! $errors->first('no_consulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_cons" class="form-label">{{ __('Fecha de Consulta') }}</label>
            <input type="text" name="fecha_cons" class="form-control @error('fecha_cons') is-invalid @enderror" value="{{ old('fecha_cons', $consulta?->fecha_cons) }}" id="fecha_cons" placeholder="Fecha de consulta">
            {!! $errors->first('fecha_cons', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="motivo" class="form-label">{{ __('Motivo') }}</label>
            <input type="text" name="motivo" class="form-control @error('motivo') is-invalid @enderror" value="{{ old('motivo', $consulta?->motivo) }}" id="motivo" placeholder="Motivo de consulta">
            {!! $errors->first('motivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="problema" class="form-label">{{ __('Problema') }}</label>
            <input type="text" name="problema" class="form-control @error('problema') is-invalid @enderror" value="{{ old('problema', $consulta?->problema) }}" id="problema" placeholder="Problema">
            {!! $errors->first('problema', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="diagnostico" class="form-label">{{ __('Diagnostico') }}</label>
            <input type="text" name="diagnostico" class="form-control @error('diagnostico') is-invalid @enderror" value="{{ old('diagnostico', $consulta?->diagnostico) }}" id="diagnostico" placeholder="Diagnostico">
            {!! $errors->first('diagnostico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>