@extends('templates.template')
@section('content')
<h1 class="text-center">Pessoas</h1> <hr>

<div class="text-center mt-3 mb-4">
    <a href="{{url('pessoas/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Produto</th>
            <th scope="col">Cidade</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pes)
            @php
                $produto = $pes->find($pes->id)->relProdutos;
                $cidade = $pes->find($pes->id)->relCidades;    
            @endphp
            <tr>
                <th scope="row">{{$pes->id}}</th>
                <td>{{$pes->nome}}</td>
                <td>{{$pes->nascimento}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$cidade->nome}}</td>
                <td>         
                    <a href="{{url("pessoas/$pes->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("pessoas/$pes->id")}}">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection