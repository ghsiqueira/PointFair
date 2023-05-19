<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('emails.contato', ['data' => $validatedData], function ($message) use ($validatedData) {
            $message->to('gabrielh2805@gmail.com')
                    ->subject('Nova mensagem de contato');
        });

        return redirect()->back()->with('success', 'Obrigado! Sua mensagem foi enviada com sucesso.');
    }
}