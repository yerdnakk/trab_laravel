@extends('templates.template')
@section('content')
<h1 class="text-center">Produtos</h1> <hr>

<div class="text-center mt-3 mb-4">
    <a href="{{url('produtos/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($produtos as $produto)
            <tr>
                <th scope="row">{{$produto->id}}</th>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->preco}} R$</td>
                <td>         
                    <a href="{{url("produtos/$produto->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("produtos/$produto->id")}}">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection