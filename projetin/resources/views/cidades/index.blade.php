@extends('templates.template')
@section('content')
<h1 class="text-center">Cidades</h1> <hr>

<div class="text-center mt-3 mb-4">
    <a href="{{url('cidades/create')}}">
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
            <th scope="col">Estado</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cidades as $cid)
            @php
                $estado=$cid->find($cid->id)->relEstados;
            @endphp
            <tr>
                <th scope="row">{{$cid->id}}</th>
                <td>{{$cid->nome}}</td>
                <td>{{$estado->sigla}}</td>
                <td>         
                    <a href="{{url("cidades/$cid->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("cidades/$cid->id")}}">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection