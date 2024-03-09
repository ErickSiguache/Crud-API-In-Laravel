<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:100|min:3',
            'dui' => 'required|max:100|min:10|unique:clients,dui,'.$this->get('id').',id',
            'email' => 'required|email|max:200'
        ];
    }
}
