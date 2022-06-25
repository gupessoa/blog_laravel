<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function create()
    {
        return view('blog.contato');
    }

    public function store(Request $request)
    {
        Contato::create(
            $request->validate([
                'nome' => 'required',
                'email' => 'required',
                'tel' => 'nullable',
                'assunto' => 'nullable|min:5|max:50',
                'msg' => 'required|min:5|max:500',
            ])
        );

        return redirect()->route('blog.contato.create')->with('success', 'Mensagem enviada com sucesso');
    }
}
