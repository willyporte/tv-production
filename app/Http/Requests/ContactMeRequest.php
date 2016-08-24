<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactMeRequest extends Request
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome: Abbiamo bisogno del tuo Nome!',
            'email.required' => 'E.mail: Serve la tua E-mail per ricontattarti!',
            'email.email' => 'Prego, controlla la tua E-mail!',
            'message.required' => 'Messaggio: Ci serve sapere cosa cerchi!',
        ];
    }
}
