<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nome'=>'required|min:3',
            'valor'=>'required|numeric',
            'quantidade'=>'required|numeric',
            'descricao'=>'required|max:100'
        ];
    }

    public function messages(){
        return [
            'required'=>'O :attribute é obrigatório'
        ];
    }
}
