@extends('layouts.app',["current"=>"categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            @if(count($cats)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Cateoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cats as $c)
                            <tr>
                            <td>{{  $c->id}}</td>
                                <td>{{$c->nome}}</td>
                                <td>
                                <a href="/categorias/editar/{{$c->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/categorias/apagar/{{$c->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            @endif
        </div>

        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>

@endsection