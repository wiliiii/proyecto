@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? __('Show') . " " . __('Consulta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('consultas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Paciente</strong>
                                    {{ $consulta->num_historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Consulta</strong>
                                    {{ $consulta->no_consulta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha</strong>
                                    {{ $consulta->fecha_cons }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Motivo de consulta:</strong>
                                    {{ $consulta->motivo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Problema:</strong>
                                    {{ $consulta->problema }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Diagnostico:</strong>
                                    {{ $consulta->diagnostico }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
