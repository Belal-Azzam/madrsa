<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
            {
                return [
                    //
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'password' => 'required',
                    'confirmPassword' => 'required|same:password',
                    'email' => 'required|email|unique:students',
                    'gender' => 'nullable',
                    'birth_date' => 'nullable'
                ];
            }
            case 'PUT':
            {
                return [
                    //

                    'first_name' => 'required',
                    'last_name' => 'required',
                    'password' => 'required',
                    'confirmPassword' => 'required|same:password',
                    'email' => 'required|email',
                    'gender' => 'nullable',
                    'birth_date' => 'nullable'
                ];
            }
        }

    }
}
