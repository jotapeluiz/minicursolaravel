<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'id' => 'integer',
            'name' => 'required|max:30',
            'phone' => 'required|max:12',
            'phone' => 'nullable|max:200',
            'email' => 'required|email',
            'message' => 'required|max:200',
            'subject_id' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O campo nome não pode ter mais do que :max caracteres',
            'email.required' => 'O campo email é obrigatório',
            'email.max' => 'O campo email não pode ter mais do que :max caracteres',
            'email.email' => 'Informe um e-mail válido',
            'phone.required' => 'O campo telefone é obrigatório',
            'phone.max' => 'O campo telefone não pode ter mais do que :max caracteres',
            'message.required' => 'O campo mensagem é obrigatório',
            'message.max' => 'O campo mensagem não pode ter mais do que :max caracteres',
        ];
    }
}
