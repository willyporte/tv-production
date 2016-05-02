<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTvRequest extends Request
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
            //'panel' => 'required_if:status,unmonted|min:3',
            'available' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'panel.required_if' => 'RICHIESTO! quando la TV è smontata',
            'panel.min' => 'Inserisci minimamento 3 caratteri per il pannello! CAZZO!',
            'available.required' => 'Segna la disponibilità del pannello!'
        ];
    }

}
