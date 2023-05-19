<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Envie o email com as informações do formulário
        $emailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('gabrielh2805@gmail.com')->send(new ContactFormMail($emailData));
        
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}