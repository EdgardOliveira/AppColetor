<?php

namespace App\Http\Controllers;

use App\Leitura;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class LeituraController extends Controller
{
    private $leitura;

    /**
     * LeituraController constructor.
     */
    public function __construct(Leitura $leitura)
    {
        $this->leitura = $leitura;
    }

    //Listar todos
    public function index()
    {
        $leituras = $this->leitura->all();

        return response()->json([
            'leitura' => $leituras
        ]);
    }

    //Listar específico
    public function show($id)
    {
        //leitura específico
        $leitura = $this->leitura->find($id);

        if (!$leitura) {
            return response()->json([
                'successo' => false,
                'mensagem' => 'Leitura com o ' . $id . 'não foi encontrado no banco de dados'], 400);
        }

        return response()->json($leitura);
    }

    //Inserir
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'mesAno' => 'required',
                'anterior' => 'required',
                'atual' => 'required',
                'constante' => 'required',
                'residuo' => 'required',
                'medido' => 'required',
                'faturado' => 'required',
                'tarifaSemTributos' => 'required',
                'tarifaComTributos' => 'required',
                'media12Meses' => 'required',
                'dataVencimento' => 'required',
                'dataAnterior' => 'required',
                'dataAtual' => 'required',
                'dataEmissao' => 'required',
                'dataApresentacao' => 'required',
                'dataProxima' => 'required',
                'diasConsumo' => 'required',
                'consumo' => 'required',
                'total' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->all();
        $leitura = $this->leitura->create($data);

        if (!is_null($leitura))
            return response()->json(['sucesso' => true, 'mensagem' => 'Cadastrado com sucesso!', 'resultado' => $leitura]);
        else
            return response()->json(['sucesso' => false, 'mensagem' => 'Falhou ao tentar cadastrar!']);
    }

    //Atualizar específico
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'id' => 'required',
                'atual' => 'required',
                'residuo' => 'required',
                'medido' => 'required',
                'faturado' => 'required',
                'dataVencimento' => 'required',
                'dataAtual' => 'required',
                'dataEmissao' => 'required',
                'dataApresentacao' => 'required',
                'dataProxima' => 'required',
                'diasConsumo' => 'required',
                'consumo' => 'required',
                'total' => 'required'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['sucesso' => false, 'problemas' => $validator->errors()]);
        }

        $data = $request->only([
            'id',
            'atual',
            'residuo',
            'medido',
            'faturado',
            'dataAtual',
            'dataVencimento',
            'dataEmissao',
            'dataApresentacao',
            'dataProxima',
            'diasConsumo',
            'consumo',
            'total'
        ]);

        $leitura = $this->leitura->find($data['id']);

        $leitura->residuo = $request->residuo;
        $leitura->atual = $request->atual;
        $leitura->medido = $request->medido;
        $leitura->faturado = $request->faturado;
        $leitura->diasConsumo = $request->diasConsumo;
        $leitura->consumo = $request->consumo;
        $leitura->total = $request->total;
        $leitura->dataAtual = Carbon::parse($request->dataAtual)->format('Y-m-d');
        $leitura->dataEmissao = Carbon::parse($request->dataEmissao)->format('Y-m-d');
        $leitura->dataApresentacao = Carbon::parse($request->dataApresentacao)->format('Y-m-d');
        $leitura->dataProxima = Carbon::parse($request->dataProxima)->format('Y-m-d');
        $leitura->dataVencimento = Carbon::parse($request->dataVencimento)->format('Y-m-d');

        $data['dataAtual'] = Carbon::parse($request->dataAtual)->format('Y-m-d');
        $data['dataEmissao'] = Carbon::parse($request->dataEmissao)->format('Y-m-d');
        $data['dataApresentacao'] = Carbon::parse($request->dataApresentacao)->format('Y-m-d');
        $data['dataProxima'] = Carbon::parse($request->dataProxima)->format('Y-m-d');
        $data['dataVencimento'] = Carbon::parse($request->dataVencimento)->format('Y-m-d');

        $leitura->update($data);

        return response()->json($leitura);
    }

    //Listar específico
    public function destroy($id)
    {
        $leitura = $this->leitura->find($id);
        $leitura->delete();

        return response()->json(['sucesso' => true, 'mensagem' => 'Leitura com id: ' . $id . 'excluído com sucesso do banco de dados!']);
    }
}
