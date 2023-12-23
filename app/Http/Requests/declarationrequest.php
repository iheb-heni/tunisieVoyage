<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class declarationrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    
    public function rules(): array
    {
        switch($this->method()) {
            case 'POST' : {
                return [
                    'name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required',
                    'message' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required',
                ];
            }
        }
    }
}
