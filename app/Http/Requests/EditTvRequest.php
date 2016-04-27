<?php

namespace App\Http\Requests;

class EditTvRequest extends Request
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
        /*
         * Para obtener el id del cliente ver en la ruta el parametro a usar
         * clienti.edit --- clienti/{clienti}/edit
         * $this->route()->getParameter('clienti')
         * MAS FACIL TODAVIA!:: $this->clienti
         */

        return [
            'panel' => 'required|min:3',
            'available' => 'required',
        ];
    }

    /*
     * Otra forma de mostrar el mensaje
     */
    public function messages()
    {
        return [
            'panel.required' => 'Inserisci un pannello!',
            'panel.min' => 'Almeno 3 caratteri per il pannello!'
        ];
    }


}
