@extends('layouts.app',["current"=>"produtos"])

@section('body')
<div class="card border">

    

    <div class="card-body">
        <form action="/produtos/{{$prod->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" 
            value="{{$prod->nome}}">
            </div>
            <div class="form-group">
                <label for="estoqueProduto">Estoque do Produto</label>
                <input type="number" min="0" class="form-control" id="estoqueProduto" name="estoqueProduto" 
                value="{{$prod->estoque}}">
            </div>
            
            <div class="form-group">
                <label for="precoProduto">Preço do Produto</label>
                <input type="values" class="form-control" id="precoProduto" name="precoProduto" 
                value="{{$prod->preco}}">
            </div>
            <div class="form-group">
                <label for="categoriaProduto">Categoria do Produto</label>
            <select class="form-control" id="categoriaProduto" name="categoriaProduto">
                    
                    @foreach ($cats as $c)
                        @if ($c->id == $prod->categoria_id)
                            <option selected="selected" value="{{$c->id}}">{{$c->nome}}</option>
                        @else
                            <option value="{{$c->id}}">{{$c->nome}}</option>
                        @endif
                    
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
@endsection
