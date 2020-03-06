<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private $alunos = [
        ['id' => 1, 'nome' => 'Alan', 'cidade' => 'Blumenau', 'estado'=> 'SC'],
        ['id' => 2, 'nome' => 'João Robson', 'cidade' => 'Gaspar', 'estado'=> 'SC']
    ];

    public function __construct()
    {
        $alunos = session('alunos');
        if (!isset($alunos))
            session(['alunos'=>$this->alunos]);
    }

    public function index()
    {
        $alunos = session('alunos');
        return view('alunos.index', compact(['alunos']));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $alunos = session('alunos');
        $id = end($alunos)['id'] + 1;
        $nome = $request->nome;
        $cidade = $request->cidade;
        $estado = $request->estado;
        
        $dados = [
            'id' => $id,
            'nome' => $nome,
            'cidade' => $cidade,
            'estado' => $estado
        ];

        $alunos[] = $dados;
        session(['alunos'=>$alunos]);

        return redirect()->route('alunos.index');
    }

    public function show($id)
    {
        $alunos = session('alunos');
        $index = $this->getIndex($id, $alunos);
        $aluno = $alunos[$index];

        return view('alunos.view', compact(['aluno']));
    }

    public function edit($id)
    {
        $alunos = session('alunos');
        $index = $this->getIndex($id, $alunos);
        $aluno = $alunos[$index];

        return view('alunos.edit', compact(['aluno']));
    }

    public function update(Request $request, $id)
    {
        $alunos = session('alunos');
        $index = $this->getIndex($id, $alunos);
        $alunos[$index]['nome'] = $request->nome;
        $alunos[$index]['cidade'] = $request->cidade;
        $alunos[$index]['estado'] = $request->estado;
        
        session(['alunos'=>$alunos]);

        return redirect()->route('alunos.index');
    }

    public function destroy($id)
    {
        $alunos = session('alunos');
        $index = $this->getIndex($id, $alunos);
        array_splice($alunos, $index, 1);

        session(['alunos'=>$alunos]);

        return redirect()->route('alunos.index');
    }

    private function getIndex($id, $alunos)
    {
        $ids = array_column($alunos, 'id');
        $index = array_search($id, $ids);

        return $index;
    }
}
