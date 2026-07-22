<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function telaCadastro()
    {
        return view('users.users_signup');
    }

    public function registrar(Request $request)
    {
        $dados = $request->all();
        $dados['status'] = 0;

        $salvou = Usuario::create($dados);

        if ($salvou) {
            return redirect()->route('login')->with('mensagem', 'Usuário cadastrado com sucesso!');
        }
        return redirect()->route('cadastro')->with('erro', 'Não foi possível cadastrar o usuário!');
    }

    public function listar_usuarios()
    {
        $usuarios = Usuario::all();
        return view('users.list_users', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('users.create_user');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['status'] = 0;

        $salvou = Usuario::create($dados);

        if ($salvou) {
            return redirect()->route('listarUsuarios')->with('mensagem', 'Usuário cadastrado com sucesso!');
        }
        return redirect()->route('usuarios.create')->with('erro', 'Não foi possível cadastrar o usuário!');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $usuario = Usuario::find($id);

        if ($usuario) {
            return view('users.edit_users', ['usuario' => $usuario]);
        }
        return redirect()->route('listarUsuarios')->with('erro', 'Usuário não encontrado!');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->update($request->all());
            return redirect()->route('listarUsuarios')->with('mensagem', 'Usuário editado com sucesso!');
        }
        return redirect()->route('listarUsuarios')->with('erro', 'Não foi possível editar o usuário!');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $excluiu = Usuario::destroy($id);

        if ($excluiu) {
            return redirect()->route('listarUsuarios')->with('mensagem', 'Usuário excluído com sucesso!');
        }
        return redirect()->route('listarUsuarios')->with('erro', 'Não foi possível excluir o usuário!');
    }
}
