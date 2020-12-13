<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            Esquema Excepciones en requerir campo unico "unique:[NameTable],[ColumnTable],'.$XXX->ColumnException.',ColumnException"
            'username' => 'required|unique:users,username'
        */
        // dd($this->user);

        return [
            //
            'firstname' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->user->id.',id',
            'username' => 'required|unique:users,username,'.$this->user->id.',id'
        ];
    }
}
