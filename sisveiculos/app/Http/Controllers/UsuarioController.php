<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    // Método para exibir a tela de cadastro (que chamamos no passo anterior)
    public function telaCadastro()
    {
        return view('auth.signup');
    }

    // ➔ EQUIVALENTE AO CASE 'register'
    public function registrar(Request $request)
    {
        $nome = $request->input("nome");
        $login = $request->input("login");
        $email = $request->input("email");
        $senha = $request->input("senha");

        $salvou = DB::insert("INSERT INTO usuarios (nome, login, email, senha) VALUES (?, ?, ?, ?)", [$nome, $login, $email, $senha]);

        if ($salvou) {
            // with() substitui o seu <script>alert(...)</script>
            return redirect()->route('login')->with('mensagem', 'Usuário cadastrado com sucesso!');
        } else {
            return redirect()->route('cadastro')->with('erro', 'Não foi possível cadastrar o usuário!');
        }
    }

    // ➔ EQUIVALENTE AO CASE 'editar'
    public function update(Request $request, $id)
    {
        $nome = $request->input("nome");
        $login = $request->input("login");
        $email = $request->input("email");
        $senha = $request->input("senha");

        $atualizou = DB::update("UPDATE usuarios SET nome=?, login=?, email=?, senha=? WHERE id=?", [$nome, $login, $email, $senha, $id]);

        if ($atualizou) {
            // Redireciona para a rota de listagem de usuários do admin (precisaremos criar essa rota depois)
            return redirect()->route('usuarios.index')->with('mensagem', 'Usuário editado com sucesso!');
        } else {
            return redirect()->route('usuarios.index')->with('erro', 'Não foi possível editar o usuário!');
        }
    }

    // ➔ EQUIVALENTE AO CASE 'excluir'
    public function destroy($id)
    {
        $excluiu = DB::delete("DELETE FROM usuarios WHERE id=?", [$id]);

        if ($excluiu) {
            return redirect()->route('usuarios.index')->with('mensagem', 'Usuário excluído com sucesso!');
        } else {
            return redirect()->route('usuarios.index')->with('erro', 'Não foi possível excluir o usuário!');
        }
    }
}
?>