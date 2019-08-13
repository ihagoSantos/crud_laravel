@extends('layouts.app',["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <div class="card-title"><h5>Cadastro de Produtos</h5></div>

            @if (count($prods)>0)
                <table class="table table-order table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Estoque</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($prods as $p)
                            
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nome}}</td>
                                <td>{{$p->estoque}}</td>
                                <td>{{$p->preco}}</td>
                                
                                <!-- -->
                                @foreach ($cats as $c)
                                    @if ($p->categoria_id == $c->id)
                                        <td>{{$c->nome}}</td>
                                    @endif
                                @endforeach
                                    
                                    
                                
                                <td>
                                    <a href="/produtos/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/produtos/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                                
                            </tr>
                            
                        @endforeach
                    </tbody>

                </table>
            @endif
            
        </div>

        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-primary">Novo Produto</a>
        </div>
    </div>
@endsection