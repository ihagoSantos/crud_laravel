<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categoria;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prods = Produtos::all();
        $cats = Categoria::all();
        
        return view('produtos',compact('prods','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna pra view onde será criado o novo produto
        $cats = Categoria::all();
        return view('novoProduto',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Armazena no BD o produto
        $prod = new Produtos();
        $prod->nome = $request->input('nomeProduto');
        $prod->estoque = $request->input('estoqueProduto');
        $prod->preco = $request->input('precoProduto');
        $prod->categoria_id = $request->input('categoriaProduto');

        $prod->save();

        return redirect('/produtos');
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
        //Editar um produto
        $cats = Categoria::all();
        $prod = Produtos::find($id);

        if(isset($prod)){
            return view('editarProduto')->with('prod',$prod)->with('cats',$cats);
        }
        else{
            return view('/produtos');
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
        //Atualiza o produto
        $prod = Produtos::find($id);
        if(isset($prod)){
            $prod->nome = $request->input('nomeProduto');
            $prod->estoque = $request->input('estoqueProduto');
            $prod->preco = $request->input('precoProduto');
            $prod->categoria_id = $request->input('categoriaProduto');

            $prod->save();
            return redirect('/produtos');
        }
        else{
            return view('/produtos');
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
        //Apaga uma categoria
        $prod = Produtos::find($id);

        if(isset($prod)){
            $prod->delete();
        }

        return redirect('/produtos');
    }
}
