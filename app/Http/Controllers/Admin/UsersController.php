<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Exporto Modelo a la clase User
use App\Entities\Admin\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Recupero los registros a nivel de db con paginación de 10 registros
        $users = User::Paginate(10);
   
        // Retorno la vista con los 10 usuarios a paginar
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create', [
            // 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Inicializo Nuevo Usuario
        $row = new User();

        // Recupero valores desde los inputs del formulario Crear Usuario
        $row->firstname = $request->input('firstname');
        $row->lastname = $request->input('lastname');
        $row->username = $request->username;
        $row->email = $request->input('email');
        $row->password = bcrypt($request->username);

        // Inicializo Variables
        $row->created_by = 1;
        $row->updated_by = 1;

        // Ejecuto Guardado 
        $row->save();

        // Redirecciono a la vista del Usuario Nuevo
        return redirect()->route('admin.user.show', $row->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // Buscamos el ID del usuario en el modelo User
        // $user = User::where('id', $id)->first();

        // $user->link_edit = route('admin.user.show', $user->id);
        // Debugger
        //dd($user);

        // Retorno la vista con la información del usuario a procesar
        return view('admin.user.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($id, $request->all());

        // Recupero valores desde el formulario
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->start_date = $request['start_date'];

        // Guardo cambios
        $user->save();
        
        // 
        return redirect()->route('admin.user.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
