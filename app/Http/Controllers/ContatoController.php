<?php

namespace App\Http\Controllers;

use App\Mail\ContatoMail;
use App\Mail\tEST;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function create()
    {
        return view('blog.contato');
    }

    public function store(Request $request)
    {

        $dados = $request->validate([
                        'nome' => 'required',
                        'email' => 'required',
                        'tel' => 'nullable',
                        'assunto' => 'nullable|min:5|max:50',
                        'msg' => 'required|min:5|max:500',
                    ]);

        $contato = Contato::create($dados);

//        dd($contato);

        Mail::to(env('ADMIN_EMAIL'))
            ->send( new ContatoMail(
                    $dados['nome'],
                    $dados['email'],
                    $dados['tel'],
                    $dados['assunto'],
                    $dados['msg']
                )
            );

        return redirect()->route('blog.contato.create')->with('success', 'Mensagem enviada com sucesso');
    }
}
