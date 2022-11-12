<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Models\dadosusuarios;

class UserController extends Controller
{
    public function MostrarLoginUser()
    {
        return view('loginUser');
    } //fim da funcao

    public function MostrarCadastroUser()
    {
        return view('cadastrarUser');
    } //fim da funcao

    //metodo cadastrar:
    public function SalvarBancoUsuario(Request $request)
    {
        $dadosUsuario = $request->validate([
            'nome' => 'string|required',
            'cpf' => 'string|required',
            'telefone' => 'string|required',
            'email' => 'string|required',
            'senha' => 'string|required'
        ]);

        dadosusuarios::create($dadosUsuario);

        return Redirect::route('login');
    } //fim da funcao

    public function MostrarEditarUsuario(Request $request)
    {
        //função para buscar por marca:
        $dadosUsuario = dadosusuarios::query();
        //guardas os dados do banco em uma outra variavel.
        $dadosUsuario = $dadosUsuario->get();
        return view('editarUser', ['registrosUsuario' => $dadosUsuario]);
    } //fim da funcao

    public function MostrarAlterarUsuario(dadosusuarios $registrosFinaisUsuario)
    {
        return view('alterarUser', ['registrosFinaisUsuario' => $registrosFinaisUsuario]);
    } //fim da funcao

    public function AlterarBancoUsuario(dadosusuarios $registrosFinaisUsuario, Request $request)
    {
        $banco = $request->validate([
            'nome' => 'string|required',
            'cpf' => 'string|required',
            'telefone' => 'string|required',
            'email' => 'string|required',
            'senha' => 'string|required'
        ]);
        $registrosFinaisUsuario->fill($banco);
        $registrosFinaisUsuario->save();
        return Redirect::route('editar-usuario');
    } //fim da funcao


}//fim da classe
