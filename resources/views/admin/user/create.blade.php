@extends('layouts.app')

    @section('icon_title')
        <i class="fa fa-fw fa-user-plus"></i>
    @endsection

    
    @section('title', 'Creación de Usuario')

    @section('content')
        <form action="{{ route('admin.user.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Formulario - Creación de Usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="" class="label label-default">First Name</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Nombres" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="label label-default">Last Name</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Apellidos" required>
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <label for="" class="label label-default">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <label for="" class="label label-default">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Usuario " required>
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <label for="" class="label label-default">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="float-right">
                        <a href="{{ route('admin.user.index') }}" class="btn btn-outline-danger">Cancelar</a>
                        <button type="submit" class="ml-2 btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    @endsection