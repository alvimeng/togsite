<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EsforcoRequest extends FormRequest
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
    public function messages()
    {
      return [
        'nome.required'=>'Preencha o nome do Esforço',
        'cidade.required'=>'Adicione a cidade do Esforço',
        'descricao.required'=>'Adicione uma descrição do Esforço',
        'termino.required'=>'Adicione uma data limite para o Esforço',
        'maxparticipantes.required'=>'Quantidade máxima de participantes',
        'maxparticipantes.min'=>'Quantidade máxima deve ser maior ou igual que a mínima',
        'minparticipantes.required'=>'Quantidade mínima de participantes'

      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'required',
            'cidade'=> 'required',
            'descricao'=> 'required',
            'termino'=> 'required',
            'maxparticipantes'=>'required|min:minparticipantes',
            'minparticipantes'=>'required'
        ];
    }
}
