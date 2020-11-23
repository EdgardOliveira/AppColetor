<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    private $cliente;

    /**
     * ClienteController constructor.
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    //Listar todos
    public function index()
    {
        $clientes = $this->cliente->all();
//        return response()->json($clientes);

        return response()->json([
            'cliente' => $clientes
        ]);
    }

    //Listar específico
    public function show($id)
    {
        //faturas de um cliente específico
        $cliente = DB::select(
            'select l.mesAno as contaMes, "" as vencimento, l.consumo, l.total, c.nome_empresa as cliente,
                e.logradouro, e.numero, e.complemento, e.bairro, e.uf, cdd.nome as uf, l.dataAtual, l.dataAnterior,
                l.dataProxima, l.dataEmissao, l.dataApresentacao, DATEDIFF (l.dataAtual, l.dataAnterior) as diasConsumo,
                m.grupo, m.classe, m.ligacao, m.numero, m.faturamento, m.modalidade, m.status, l.atual, l.anterior,
                l.constante, l.residuo, l.medido, l.faturado, "0.886453" as fator,
                (l.consumo * 0.886453) as totalSemContribuicao from clientes as c
                inner join leituras l on C.id = l.cliente_id
                inner join medidores m on l.medidor_id = m.id
                inner join enderecos e on m.id = e.medidor_id
                inner join cidades cdd on e.cidade_id =cdd.id
                where c.id = 1
                order by e.cep'
        );


        if (!$cliente) {
            return response()->json([
                'successo' => false,
                'mensagem' => 'Cliente com o ' . $id . 'não foi encontrado no banco de dados'], 400);
        }

        return response()->json($cliente);
    }

    //Inserir
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'nome_empresa' => 'required',
                'cpf_cnpj' => 'required',
                'diaVencimento' => 'required',
                'medidor_id' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $cliente = $this->cliente->create($data);

        if (!is_null($cliente))
            return response()->json(['sucesso' => true, 'mensagem' => 'Cadastrado com sucesso!', 'resultado' => $cliente]);
        else
            return response()->json(['sucesso' => false, 'mensagem' => 'Falhou ao tentar cadastrar!']);
    }

    //Atualizar específico
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'id' => 'required',
                'nome_empresa' => 'required',
                'cpf_cnpj' => 'required',
                'diaVencimento' => 'required',
                'medidor_id' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $cliente = $this->cliente->find($data['id']);
        $cliente->update($data);

        return response()->json($cliente);

    }

    //Listar específico
    public function destroy($id)
    {
        $cliente = $this->cliente->find($id);
        $cliente->delete();

        return response()->json(['sucesso' => true, 'mensagem' => 'Cliente com id: ' . $id . 'excluído com sucesso do banco de dados!']);
    }
}
