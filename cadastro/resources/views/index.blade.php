@extends('layouts.app',["current"=>"home"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-secondary">
                    <div class="card-body">
                        <h5 class="card-tittle">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você pode cadastrar todos os seus produtos.
                            Só não esqueça de cadastrar preveamente as categorias.
                        </p>
                        <a href="/produtos" class="btn btn-dark">Cadastre seus produtos</a>
                    </div>
                </div>

                <div class="card border border-secondary">
                    <div class="card-body">
                        <h5 class="card-tittle">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Cadastre as categorias dos seus produtos.
                        </p>
                        <a href="/categorias" class="btn btn-dark">Cadastre suas categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection