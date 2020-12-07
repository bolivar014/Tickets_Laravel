@extends('layouts.app')
    @section('title', 'Listado de Usuarios')

    @section('icon_title')
        <i class="fa fa-fw fa-users"></i>
    @endsection
    
    @section('content')
        <!-- Inicio Card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Usuarios</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Correo</th>
                                <th>Usuario</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pepito Perez</td>
                                <td>Cliente@sincorreo.com</td>
                                <td>Pepito123</td>
                                <td>2020-03-12</td>
                                <td>2021-06-12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- Fin Card -->
    @endsection