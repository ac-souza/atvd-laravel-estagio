<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    // Método para exibir a tela de cadastro (que chamamos no passo anterior)
    public function telaCadastro()
    {
        return view('users.users_signup');
    }

    // ➔ EQUIVALENTE AO CASE 'register'
    public function registrar(Request $request)
    {
        $nome = $request->input("nome");
        $login = $request->input("login");
        $email = $request->input("email");
        $senha = $request->input("senha");

        $salvou = DB::insert("INSERT INTO usuarios (nome, login, email, senha, status) VALUES (?, ?, ?, ?, 0)", [$nome, $login, $email, $senha]);

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
    public function index()
    {
        // O equivalente ao seu: $sql = "SELECT * FROM usuarios"; $res = $conn->query($sql);
        $usuarios = DB::select("SELECT * FROM usuarios");
        
        // Retorna a view e passa a variável $usuarios para ela
        return view('users.list_users', ['usuarios' => $usuarios]);
        }
    // ➔ ABRE A TELA DE CADASTRAR NOVO USUÁRIO PELO PAINEL
    public function create()
    {
        // Vai procurar o arquivo em resources/views/usuarios/create.blade.php
        return view('users.create_user'); 
    }

    // ➔ RECEBE OS DADOS, SALVA NO BANCO E VOLTA PRA LISTA (A rota usuarios.store)
    public function store(Request $request)
    {
        $nome = $request->input("nome");
        $login = $request->input("login");
        $email = $request->input("email");
        $senha = $request->input("senha");
        // Nota: Você pode querer adicionar o 'status' aqui também, dependendo da sua tabela

        $salvou = DB::insert("INSERT INTO usuarios (nome, login, email, senha, status) VALUES (?, ?, ?, ?, 0)", [$nome, $login, $email, $senha]);

        if ($salvou) {
            // AQUI ESTÁ A MÁGICA: Redireciona de volta para a lista de usuários!
            return redirect()->route('usuarios.index')->with('mensagem', 'Usuário cadastrado com sucesso!');
        } else {
            // Se der erro, volta para a tela do formulário (create)
            return redirect()->route('usuarios.create')->with('erro', 'Não foi possível cadastrar o usuário!');
        }
    }
}
?>