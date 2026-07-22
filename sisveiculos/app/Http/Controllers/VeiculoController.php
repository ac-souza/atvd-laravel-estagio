<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Modelo;

class VeiculoController extends Controller
{
    public function listar_veiculos()
    {
        $veiculos = Veiculo::with('modelo')->get();

        return view('vehicle.list_vehicles', ['veiculos' => $veiculos]);
    }

    public function create()
    {
        $modelos = Modelo::all();
        return view('vehicle.vehicle_signup', ['modelos' => $modelos]);
    }

    public function store(Request $request)
    {
        $salvou = Veiculo::create($request->all());

        if ($salvou) {
            return redirect()->route('listarVeiculos')->with('mensagem', 'Veículo cadastrado com sucesso!');
        }
        return redirect()->route('listarVeiculos')->with('erro', 'Não foi possível cadastrar o veículo!');
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $veiculo = Veiculo::find($id);
        $modelos = Modelo::all();

        if ($veiculo) {
            return view('vehicle.edit_vehicles', ['veiculo' => $veiculo, 'modelos' => $modelos]);
        }
        return redirect()->route('listarVeiculos')->with('erro', 'Veículo não encontrado!');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $veiculo = Veiculo::find($id);

        if ($veiculo) {
            $veiculo->update($request->all());
            return redirect()->route('listarVeiculos')->with('mensagem', 'Veículo editado com sucesso!');
        }
        return redirect()->route('listarVeiculos')->with('erro', 'Não foi possível editar o veículo!');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $excluiu = Veiculo::destroy($id);

        if ($excluiu) {
            return redirect()->route('listarVeiculos')->with('mensagem', 'Veículo excluído com sucesso!');
        }
        return redirect()->route('listarVeiculos')->with('erro', 'Não foi possível excluir o veículo!');
    }
}
