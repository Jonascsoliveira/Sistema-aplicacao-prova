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
        $questao = $teste->questao()->all();

        return view('teste.show');
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
        return view('teste.edit')->withTeste($teste);
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
        $teste->delete();
        return view('teste.index')->withTestes(Teste::paginate(10));
    }
}
