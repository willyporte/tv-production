<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactMeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name','email','phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('mails.contact', $data, function($message) use ($data) {
            $message->subject('Contatto dal sito Ricambi TV: '.$data['name'])
                    ->to('info@elettronicalowcost.it')
                    ->replyTo($data['email']);
        });

        Session::flash('message','Grazie del tuo interessamento. Verrai ricontattato, a breve, da un nostro adetto');
        Session::flash('flash_type','alert-success');

        return back();
    }

}
