@extends('layouts.app')

@section('template_title')
    {{ $datper->name ?? __('Show') . " " . __('Datper') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Datos de pacientes</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datpers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>No Historia:</strong>
                                    {{ $datper->no_historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ci:</strong>
                                    {{ $datper->CI }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre1:</strong>
                                    {{ $datper->nombre1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Appaterno:</strong>
                                    {{ $datper->appaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apmaterno:</strong>
                                    {{ $datper->apmaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $datper->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Est Civil:</strong>
                                    {{ $datper->est_civil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fec Nac:</strong>
                                    {{ $datper->fec_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $datper->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fono:</strong>
                                    {{ $datper->fono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fono2:</strong>
                                    {{ $datper->fono2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $datper->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad:</strong>
                                    {{ $datper->ciudad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
