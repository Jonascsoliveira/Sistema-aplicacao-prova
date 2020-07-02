<?php

namespace App\Http\Controllers;

use App\Teste;
use App\User;
use Exception;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teste.index')->withTestes(Teste::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teste.create');
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
        try{
        $user = User::find(auth()->user()->id);//find id user
        
        $user->testes()->create($data);

        return view('teste.index')->withTestes(Teste::paginate(10));
        }catch(Exception $e){
            $messege = 'Ocorreu um erro';
            if(env('APP_DEBUG')){
                $messege = $e->getMessage();
            }
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teste = Teste::findOrFail($id);

        return view('teste.show')->withTestes($teste);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teste = Teste::findOrFail($id);
        if(auth()->user()->id == $teste->user_id){
            return view('teste.edit')->withTeste($teste);
        }else{
            return back()->withErrors(['Você não pode editar testes feitos por outro usuários, somente os feitos por você!']);
        }
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
        $teste = Teste::findOrFail($id);

        $teste->update($data);

        return view('teste.index')->withTestes(Teste::paginate(10));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teste = Teste::findOrFail($id);
        if(auth()->user()->id == $teste->user_id){
            $teste->delete();
            return view('teste.index')->withTestes(Teste::paginate(10));
        }else{
            return back()->withErrors(['Você não pode excluir testes feitos por outro usuários, somente os feitos por você!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request, $id)
    {
        
        $data = $request->all();
        if(isset($data)){
            $testes = Teste::findOrFail($id);
            $cont=0;
            $pontos = 0;
            foreach ($testes->questao as $resultado) {
                $cont++;
                if($data['resposta'.$cont] == $resultado->resposta_correta){
                    $pontos += $resultado->valor_questao;
                }
            }
            if($pontos >= $testes->pontos_aprovacao){
                $msg = auth()->user()->name.', você acabou de ser aprovado no teste '.$testes->name.' com '.$pontos.' pontos';
            }else{
                $msg = auth()->user()->name.', você acabou de ser reprovado no teste '.$testes->name.' com '.$pontos.
                ' pontos. Quantidade necessária de pontos para aprovação é de '.$testes->pontos_aprovacao.' pontos';
            }
            //dd($msg);

            return view('home')->withMensagem($msg);
        }else{
            return back()->withErrors(['Por favor preencha corretamente as respostas!']);
        }
    }
}
