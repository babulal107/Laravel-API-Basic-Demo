<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return auth()->user()->user_type == 'A';
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $params = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'mobile' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'
        ];
        
        return $params;
    }
}
