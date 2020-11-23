<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Cidade;
use Illuminate\Support\Facades\DB;

class CidadeController extends Controller
{
    private $cidade;

    /**
     * CidadeController constructor.
     */
    public function __construct(Cidade $cidade)
    {
        $this->cidade = $cidade;
    }

    //Listar todos
    public function index()
    {
        $cidades = $this->cidade->all();

        return response()->json([
            'cidade' => $cidades
        ]);
    }

    //Listar específico
    public function show($id)
    {
        //cidade específico
        $cidade = $this->cidade->find($id);

        if (!$cidade) {
            return response()->json([
                'successo' => false,
                'mensagem' => 'Cidade com o ' . $id . 'não foi encontrado no banco de dados'], 400);
        }

        return response()->json($cidade);
    }

    //Inserir
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'nome' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $cidade = $this->cidade->create($data);

        if (!is_null($cidade))
            return response()->json(['sucesso' => true, 'mensagem' => 'Cadastrado com sucesso!', 'resultado' => $cidade]);
        else
            return response()->json(['sucesso' => false, 'mensagem' => 'Falhou ao tentar cadastrar!']);
    }

    //Atualizar específico
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'id' => 'required',
                'nome' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $cidade = $this->cidade->find($data['id']);
        $cidade->update($data);

        return response()->json($cidade);

    }

    //Listar específico
    public function destroy($id)
    {
        $cidade = $this->cidade->find($id);
        $cidade->delete();

        return response()->json(['sucesso' => true, 'mensagem' => 'Cidade com id: ' . $id . 'excluído com sucesso do banco de dados!']);
    }
}
