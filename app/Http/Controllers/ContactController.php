<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

class ContactController extends Controller
{
    public function form()
    {
        $title = "Lavora con noi";
        $description = 'Se vuoi lavorare con noi compila il formulario e noi ti contatteremo con ulteriori indicazioni';

        return view('pages.contatti',compact('title', 'description'));
    }

    public function saveData(Request $request)
    {
        
        $mail = new ContactMail($request->name, $request->email, $request->message);
        Mail::to('indirizzo@example.com')->send($mail);

        return redirect()->route('contatti')
                        ->with(['success' => 'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile.']);
    }
}
