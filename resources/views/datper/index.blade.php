@extends('layouts.app')

@section('template_title')
    Datos de pacientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <form action="{{ route('datpers.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Buscar datos....." value="{{ request('search') }}">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                    </span>
                                </div>
                            </form>
                            

                             <div class="float-right">
                                <a href="{{ route('datpers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >No Historia</th>
									<th >Ci</th>
									<th >Nombre1</th>
									<th >Appaterno</th>
									<th >Apmaterno</th>
									<th >Sexo</th>
									<th >Est Civil</th>
									<th >Fec Nac</th>
									<th >Direccion</th>
									<th >Fono</th>
									<th >Fono2</th>
									<th >Celular</th>
									<th >Ciudad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datpers as $datper)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $datper->no_historia }}</td>
										<td >{{ $datper->CI }}</td>
										<td >{{ $datper->nombre1 }}</td>
										<td >{{ $datper->appaterno }}</td>
										<td >{{ $datper->apmaterno }}</td>
										<td >{{ $datper->sexo }}</td>
										<td >{{ $datper->est_civil }}</td>
										<td >{{ $datper->fec_nac }}</td>
										<td >{{ $datper->direccion }}</td>
										<td >{{ $datper->fono }}</td>
										<td >{{ $datper->fono2 }}</td>
										<td >{{ $datper->celular }}</td>
										<td >{{ $datper->ciudad }}</td>

                                            <td>
                                                <form action="{{ route('datpers.destroy', $datper->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datpers.show', $datper->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datpers.edit', $datper->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datpers->links() !!}
            </div>
        </div>
    </div>
@endsection
