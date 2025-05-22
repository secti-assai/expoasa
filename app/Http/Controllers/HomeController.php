<?php

namespace App\Http\Controllers;

use App\Models\Expoasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        return view('home.landing');
    }

    public function landing2() {
        return view('home.landing2');
    }

    public function teste() {
        return view('home.teste');
    }

    public function credenciamento() {
        return view('cadastro');
    }

    public function create(Request $request)
    {
        $consultacpf = Expoasa::where('cpf','=', $request->input('txtCPF'))->first();
        if(! empty($consultacpf))
            return redirect()->route('credenciamento')->with('error','Cidadão já cadastrado! Caso não proceda, procure a Secretaria de Ciência Tecnologia e Inovação: 43 3262-8306');

       //Verifica se o LGPD está marcado
       $lgpd = $request->has('txtLGPD') ? 'S' : 'N';

        $visitante = new Expoasa();
            $visitante->nome = Str::upper($request->input('txtNome'));
            $visitante->cpf = $request->input('txtCPF');
            $visitante->endereco = Str::upper($request->input('txtEnd'));
            $visitante->cidade = Str::upper($request->input('txtCidade'));
            $visitante->contato = $request->input('txtContato');
            $visitante->nascimento = substr($request->input('txtNascimento'),6,4).'-'.substr($request->input('txtNascimento'),3,2).'-'.substr($request->input('txtNascimento'),0,2);
            $visitante->lgpd = $lgpd;
        $saved = $visitante->save();

        if($saved) {
            return redirect()->route('credenciamento')->with('success','Cadastro realizado com sucesso!');;
        } else {
            return back()->withErrors('error', 'Problema no registro do cadastro. Se persistir, informe para Secretaria Municipal de Ciência, Tecnologia e Inovação');
        }

    }

    public function sorteio() {
        return view('sorteio01');
    }

    public function sortear() {
        $consultanomes = Expoasa::limit(1)->inRandomOrder()->get();

        return view('resultadoSorteio',[
            'resultados' => $consultanomes
        ]);

    }
}
