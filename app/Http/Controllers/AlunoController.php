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
        $dados = $request->all();
        dd($dados);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('alunos.edit');

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    private function getIndex($id, $alunos)
    {
        $ids = array_column($alunos, 'id');
        $index = array_search($id, $ids);

        return $index;
    }
}
