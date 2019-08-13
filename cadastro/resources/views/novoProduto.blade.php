@extends('layouts.app',["current"=>"produtos"])

@section('body')
<!-- Form para criação de novo produto -->

<div class="card border">

    

    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" placeholder="Produto">
            </div>
            <div class="form-group">
                <label for="estoqueProduto">Estoque do Produto</label>
                <input type="number" min="0" class="form-control" id="estoqueProduto" name="estoqueProduto" placeholder="Estoque">
            </div>
            
            <div class="form-group">
                <label for="precoProduto">Preço do Produto</label>
                <input type="values" class="form-control" id="precoProduto" name="precoProduto" placeholder="Preço">
            </div>
            <div class="form-group">
                <label for="categoriaProduto">Categoria do Produto</label>
                <select class="form-control" id="categoriaProduto" name="categoriaProduto">
                    
                    @foreach ($cats as $c)
                        <option value="{{$c->id}}">{{$c->nome}}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection