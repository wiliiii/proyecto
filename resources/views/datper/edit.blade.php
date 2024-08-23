@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Datper
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                <div class="card card-default " >

                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title">{{ __('Editar') }} datos de persona</span>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('datpers.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('datpers.update', $datper->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('datper.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
