@extends('layouts.app')
    <!-- Sección Titulo Web -->
    @section('web_title', 'Vista Test')

    <!-- Sección Icono - Titulo -->
    @section('icon_title')
        <i class="fa fa-lg fa-fw fa-home"></i>
    @endsection

    <!-- Sección Titulo -->
    @section('title')
        Bienvenidos - Inicio
    @endsection

    <!-- Sección Content -->
    @section('content')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

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
                Start creating your amazing application!
            </div>
            <!-- /.card-body -->
            
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    @endsection