<?php

namespace App\Http\Controllers;

use App\Categoria;//Acessa o model Categoria

use Illuminate\Http\Request;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Categoria::all();//retorna todas as categorias da base de dados

        return view('categorias',compact('cats'));
        //a função compact() retorna um array associativo para a view categorias
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cria uma nova categoria
        return view('novaCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Armazena no banco uma nova categoria

        $cat = new Categoria(); //cria um objeto categoria
        $cat->nome = $request->input('nomeCategoria');//o input tem que ser o mesmo do <input name=""> la em novaCategoria
        $cat->save();

        return redirect('/categorias');

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
        //Retorna view para editar

        $cat = Categoria::find($id);
        if(isset($cat)){
            return view('editarCategoria',compact('cat'));
        }
        else {
            return view('/categorias');
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
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->nome = $request->input('nomeCategoria');
            $cat->save();
            return redirect('/categorias');
        }
        else {
            return view('/categorias');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Apaga uma categoria do Banco

        $cat = Categoria::find($id); //procura o id no banco e retorna o obj para $cat

        if(isset($cat)){
            $cat->delete();
        }
        return redirect('/categorias');
    }
}
