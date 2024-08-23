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
                        <div class="row">
                            <div class="col-lg-12">
                                        <span class="card-title">Busqueda por parametros:</span>
                                        <form action="" method="get">
                                        <div class="row">
                                            
                                        <div class="col-sm-7">
                                              <div class="mb-3">
                                                <label class="form-label">Nombre:</label>
                                                <input type="text" name="nombre" class="form-control" value="{{Request()->nombre1}}" placeholder="ingrese el nombre.....">
                                            </div> 
                                        </div> 
                                    
                                            <div class="col-sm-5">
                                              <div class="mb-3">
                                                <label class="form-label">Cedula de identidad:</label>
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
                                <a href="{{ route('datpers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Cedula</th>
									<th >Nombre</th>
									<th >Apellido Paterno</th>
									<th >Apellido materno</th>
									<th >Sexo</th>
									<th >nacimiento</th>
									<th >Direccion</th>
									<th >Celular</th>
									<th >Ciudad</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datpers as $datper)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $datper->CI }}</td>
										<td >{{ $datper->nombre1 }}</td>
										<td >{{ $datper->appaterno }}</td>
										<td >{{ $datper->apmaterno }}</td>
										<td >{{ $datper->sexo }}</td>
										<td >{{ $datper->fec_nac }}</td>
										<td >{{ $datper->direccion }}</td>
										<td >{{ $datper->celular }}</td>
										<td >{{ $datper->ciudad }}</td>

                                            <td>
                                                <form action="{{ route('datpers.destroy', $datper->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datpers.show', $datper->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datpers.edit', $datper->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Esta seguro de borrar el registro? Esta accion no se puede revertir') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $datpers->links() !!}
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection
