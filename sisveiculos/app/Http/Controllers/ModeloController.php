<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{
    public function listar_modelos()
    {
        $modelos = Modelo::all();

        return view('car_model.list_models', ['modelos' => $modelos]);
    }

    public function create()
    {
        return view('car_model.model_signup');
    }

    public function store(Request $request)
    {
        $salvou = Modelo::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo')
        ]);

        if ($salvou) {
            return redirect()->route('listarModelos')->with('mensagem', 'Modelo cadastrado com sucesso!');
        }
        return redirect()->route('modelos.create')->with('erro', 'Não foi possível cadastrar o modelo!');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');

        $modelo = Modelo::find($id);

        if ($modelo) {
            return view('car_model.edit_models', ['modelo' => $modelo]);
        }
        return redirect()->route('listarModelos')->with('erro', 'Modelo não encontrado!');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $modelo = Modelo::find($id);

        if ($modelo) {
            $modelo->update([
                'marca' => $request->input('marca'),
                'modelo' => $request->input('modelo')
            ]);

            return redirect()->route('listarModelos')->with('mensagem', 'Modelo atualizado com sucesso!');
        }
        return redirect()->route('listarModelos')->with('erro', 'Não foi possível atualizar o modelo!');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $excluiu = Modelo::destroy($id);

        if ($excluiu) {
            return redirect()->route('listarModelos')->with('mensagem', 'Modelo excluído com sucesso!');
        }
        return redirect()->route('listarModelos')->with('erro', 'Não foi possível excluir o modelo!');
    }
}
