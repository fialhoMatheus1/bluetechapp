<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function MostrarLoginUser()
    {
        return view('loginUser');
    } //fim da funcao

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'string|required',
            'password' => 'string|required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Redirect::route('area-usuario');
        } else {
            return Redirect::route('cadastrar-usuario');
        }
    } //fim da funcao


    public function MostrarCadastroUser()
    {
        return view('cadastrarUser');
    } //fim da funcao

    //metodo cadastrar:
    public function SalvarBancoUsuario(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'E-mail é obrigatório!',
            'password.required' => 'Senha é obrigatório!',
            'name.required' => 'Nome é obrigatório!',
        ]);

        if (!empty($request->all())) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return Redirect::route('login');
        } else {

            return Redirect::route('cadastrarUser');
        }
    } //fim da funcao

    public function MostrarAreaUser()
    {
        return view('areaUser');
    } //fim da funcao

    public function MostrarDadosUsuario(Request $request)
    {
        //função para buscar por marca:
        $dadosUsuario = User::query();
        //guardas os dados do banco em uma outra variavel.
        $dadosUsuario = $dadosUsuario->get();
        return view('dadosUser', ['registrosUsuario' => $dadosUsuario]);
    } //fim da funcao

    public function MostrarAlterarUsuario(User $registrosFinaisUsuario)
    {
        return view('alterarUser', ['registrosFinaisUsuario' => $registrosFinaisUsuario]);
    } //fim da funcao

    public function AlterarBancoUsuario(User $registrosFinaisUsuario, Request $request)
    {
        $banco = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $registrosFinaisUsuario->fill($banco);
        $registrosFinaisUsuario->save();
        return Redirect::route('dados-usuario');
    } //fim da funcao
}//fim da classe