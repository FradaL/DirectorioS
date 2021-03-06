<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DirectoryRequest extends Request
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
        return [

            'first_name' => 'required',
            'first_surname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'CellPhone' => 'required',
            'institution_id' => 'required',
            'organization_id' => 'requiered',
        ];
    }
}
