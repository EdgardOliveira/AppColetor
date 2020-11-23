<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Medidor;
use Illuminate\Support\Facades\DB;

class MedidorController extends Controller
{
    private $medidor;

    /**
     * MedidorController constructor.
     */
    public function __construct(Medidor $medidor)
    {
        $this->medidor = $medidor;
    }

    //Listar todos
    public function index()
    {
        $medidores = DB::select(
            'select * from medidores'
        );


//        $medidores = $this->medidor->all();

        return response()->json([
            'medidor' => $medidores
        ]);
    }

    //Listar específico
    public function show($id)
    {
        //medidor específico
        $medidor = $this->medidores->find($id);

        if (!$medidor) {
            return response()->json([
                'successo' => false,
                'mensagem' => 'Medidor com o ' . $id . 'não foi encontrado no banco de dados'], 400);
        }

        return response()->json($medidor);
    }

    //Inserir
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'numero' => 'required',
                'grupo' => 'required',
                'classe' => 'required',
                'ligacao' => 'required',
                'faturamento' => 'required',
                'modalidade' => 'required',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $medidor = $this->medidores->create($data);

        if (!is_null($medidor))
            return response()->json(['sucesso' => true, 'mensagem' => 'Cadastrado com sucesso!', 'resultado' => $medidor]);
        else
            return response()->json(['sucesso' => false, 'mensagem' => 'Falhou ao tentar cadastrar!']);
    }

    //Atualizar específico
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'id' => 'required',
                'numero' => 'required',
                'grupo' => 'required',
                'classe' => 'required',
                'ligacao' => 'required',
                'faturamento' => 'required',
                'modalidade' => 'required',
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $medidor = $this->medidores->find($data['id']);
        $medidor->update($data);

        return response()->json($medidor);

    }

    //Listar específico
    public function destroy($id)
    {
        $medidor = $this->medidores->find($id);
        $medidor->delete();

        return response()->json(['sucesso' => true, 'mensagem' => 'Medidor com id: ' . $id . 'excluído com sucesso do banco de dados!']);
    }
}
