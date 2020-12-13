<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Permite al usuario en sesión ejecutar este Request
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        /*  
            Esquema Requerir campo unico "unique:[NameTable],[ColumnTable]"
            'username' => 'required|unique:users,username'
        */

        return [
            //
            'firstname' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
        ];
    }
}
