<?php

namespace App\Http\Controllers;

use App\Questao;
use App\Teste;

use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questao.index')->withQuestoes(Questao::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questao.create')->withTestes(Teste::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Questao::create($data);

        return view('questao.create')->withTestes(Teste::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testes = Teste::all();
        $questao = Questao::findOrFail($id);
        //$dados = array('testes' => $testes, 'questao' => $questao);
        //return view('questao.edit')->withQuestao($questao);
        return view('questao.edit', compact('testes', 'questao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $questao = Questao::findOrFail($id);

        $questao->update($data);

        return view('questao.index')->withQuestoes(Questao::paginate(10));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questao = Questao::findOrFail($id);
        $questao->delete();
        return view('questao.index')->withQuestoes(Questao::paginate(10));
    }
}
