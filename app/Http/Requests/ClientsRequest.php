<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientsRequest extends Request
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
            'name'          => 'required',
            'phone'         => 'required|numeric',
            'email'         => 'required|email',
            'address'       => 'required',
            'nationality'   => 'required',
            'date_of_birth' => 'required|date|before:tomorrow',
            'education'     => 'required',
            'contact_mode'  => 'required',
        ];
    }
}
