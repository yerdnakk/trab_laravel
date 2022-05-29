@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($produtos)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($produtos))
            <form name="formEdit" id="formEdit" method="post" action="{{url("produtos/$produtos->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('produtos')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="id" id="id" placeholder="Código:" value="{{$produtos->id ?? ''}}" required><br>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$produtos->nome ?? ''}}" required><br>
                <input class="form-control" type="number" name="preco" id="preco" placeholder="Preço:" value="{{$produtos->preco ?? ''}}" required><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($produtos)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection