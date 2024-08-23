@extends('layouts.app')

@section('template_title')
    Consultas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="row">
                                <div class="col-lg-12">
                                            <span class="card-title">Busqueda por parametros:</span>
                                            <form action="" method="get">
                                            <div class="row">
                                                
                                            <div class="col-sm-7">
                                                  <div class="mb-3">
                                                    <label class="form-label">Numero de consulta:</label>
                                                    <input type="text" name="nombre" class="form-control" value="{{Request()->nombre1}}" placeholder="numero de consulta">
                                                </div> 
                                            </div> 
                                        
                                                <div class="col-sm-5">
                                                  <div class="mb-3">
                                                    <label class="form-label">Cedula del paciente:</label>
                                                    <input type="text" name="ci" class="form-control" value="{{Request()->CI}}" placeholder="numero de cedula">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Buscar</button>
                                                <a href="{{ url('/datpers') }}" class="btn btn-danger">Reiniciar</a>
                                        </form>
                                    </div>                                    
                                    </div>
                                </div>
                            </div>
                             <div class="float-right">
                                <a href="{{ route('consultas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear registro') }}
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
                                        
									<th >Paciente</th>
									<th >Consulta</th>
									<th >Fecha</th>
									<th >Motivo</th>
									<th >Problema</th>
									<th >Diagnostico</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $consulta->num_historia }}</td>
										<td >{{ $consulta->no_consulta }}</td>
										<td >{{ $consulta->fecha_cons }}</td>
										<td >{{ $consulta->motivo }}</td>
										<td >{{ $consulta->problema }}</td>
										<td >{{ $consulta->diagnostico }}</td>

                                            <td>
                                                <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultas.show', $consulta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consultas.edit', $consulta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Esta seguro de borrar el registro? Esta accion no se puede revertir') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $consultas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
