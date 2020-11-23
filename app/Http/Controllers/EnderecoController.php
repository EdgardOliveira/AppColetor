<?php

namespace App\Http\Controllers;

use Validator;
use App\Endereco;
use Illuminate\Support\Facades\DB;

class EnderecoController extends Controller
{
    private $endereco;

    /**
     * EnderecoController constructor.
     */
    public function __construct(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    //Listar todos
    public function index()
    {
        $enderecos = $this->endereco->all();

        return response()->json([
            'endereco' => $enderecos
        ]);
    }

    //Listar específico
    public function show($id)
    {
        //endereco específico
        $endereco = $this->endereco->find($id);

        if (!$endereco) {
            return response()->json([
                'successo' => false,
                'mensagem' => 'Endereco com o ' . $id . 'não foi encontrado no banco de dados'], 400);
        }

        return response()->json($endereco);
    }

    //Inserir
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'cep' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'complemento' => 'required',
                'bairro' => 'required',
                'uf' => 'required',
                'cidade_id' => 'required',
                'medidor_id' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $endereco = $this->endereco->create($data);

        if (!is_null($endereco))
            return response()->json(['sucesso' => true, 'mensagem' => 'Cadastrado com sucesso!', 'resultado' => $endereco]);
        else
            return response()->json(['sucesso' => false, 'mensagem' => 'Falhou ao tentar cadastrar!']);
    }

    //Atualizar específico
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'id' => 'required',
                'cep' => 'required',
                'logradouro' => 'required',
                'numero' => 'required',
                'complemento' => 'required',
                'bairro' => 'required',
                'uf' => 'required',
                'cidade_id' => 'required',
                'medidor_id' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $endereco = $this->endereco->find($data['id']);
        $endereco->update($data);

        return response()->json($endereco);

    }

    //Listar específico
    public function destroy($id)
    {
        $endereco = $this->endereco->find($id);
        $endereco->delete();

        return response()->json(['sucesso' => true, 'mensagem' => 'Endereco com id: ' . $id . 'excluído com sucesso do banco de dados!']);
    }
}
