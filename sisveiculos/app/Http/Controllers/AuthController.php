<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Para mexer no banco

class AuthController extends Controller
{
    // Exibe a tela de login
    public function telaLogin() {
        return view('users.login');
    }

    // O seu antigo authenticator.php
    public function logar(Request $request) {
        $login = $request->input('login');
        $senha = $request->input('senha');

        // Busca o usuário no banco
        $usuario = DB::select("SELECT * FROM usuarios WHERE login = ? AND senha = ?", [$login, $senha]);

        if (count($usuario) == 1) {
            $user = $usuario[0];

            // Cria a sessão igual você fazia (o Laravel gerencia isso via helper session())
            session([
                'logado' => true,
                'usuario_nome' => $user->nome,
                'usuario_id' => $user->id
            ]);

            // Atualiza o status para 1
            DB::update("UPDATE usuarios SET status = 1 WHERE id = ?", [$user->id]);

            return redirect()->route('home');
        } else {
            // Retorna para a tela de login com uma mensagem de erro
            return redirect()->route('login')->with('erro', 'Login ou senha incorretos!');
        }
    }

    // O seu antigo logout.php
    public function logout() {
        if (session()->has('usuario_id')) {
            $id_usuario = session('usuario_id');
            // Atualiza status para 0
            DB::update("UPDATE usuarios SET status = 0 WHERE id = ?", [$id_usuario]);
        }

        // Destrói a sessão
        session()->flush();

        return redirect()->route('login');
    }
}

?>