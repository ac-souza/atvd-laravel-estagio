<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function telaLogin()
    {
        return view('users.login');
    }

    public function home()
    {
        return view('home.home');
    }

    public function logar(Request $request)
    {
        $usuario = Usuario::where('login', $request->input('login'))
            ->where('senha', $request->input('senha'))
            ->first();

        if ($usuario) {
            session([
                'logado' => true,
                'usuario_nome' => $usuario->nome,
                'usuario_id' => $usuario->id
            ]);

            $usuario->update(['status' => 1]);

            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('erro', 'Login ou senha incorretos!');
        }
    }

    public function logout()
    {
        if (session()->has('usuario_id')) {
            $usuario = Usuario::find(session('usuario_id'));
            if ($usuario) {
                $usuario->update(['status' => 0]);
            }
        }

        session()->flush();

        return redirect()->route('login');
    }
}
