@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($pessoas)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($pessoas))
            <form name="formEdit" id="formEdit" method="post" action="{{url("pessoas/$pessoas->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('pessoas')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="id" id="id" placeholder="Código:" value="{{$pessoas->id ?? ''}}" required><br>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$pessoas->nome ?? ''}}" required><br>
                <input class="form-control" type="date" name="nascimento" id="nascimento" placeholder="Nascimento:" value="{{$pessoas->nascimento ?? ''}}" required><br>
                <select class="form-control" name="produto" id="produto" required>             
                    @foreach($produtos as $produto)
                        @if(isset($pessoas))
                            @if($pessoas->produto == $produto->id)                  
                                <option value="{{$produto->id}}" selected>{{$produto->nome}}</option>
                            @else
                                <option value="{{$produto->id}}">{{$produto->nome}}</option>
                            @endif
                        @else
                            <option value="{{$produto->id}}">{{$produto->nome}}</option>
                        @endif
                    @endforeach
                </select><br>
                <select class="form-control" name="cidade" id="cidade" required>             
                    @foreach($cidades as $cidade)
                        @if(isset($pessoas))
                            @if($pessoas->cidade == $cidade->id)                  
                                <option value="{{$cidade->id}}" selected>{{$cidade->nome}}</option>
                            @else
                                <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                            @endif
                        @else
                            <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                        @endif
                    @endforeach
                </select><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($pessoas)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection