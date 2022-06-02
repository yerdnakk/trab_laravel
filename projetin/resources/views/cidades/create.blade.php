@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($cidades)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($cidades))
            <form name="formEdit" id="formEdit" method="post" action="{{url("cidades/$cidades->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('cidades')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="id" id="id" placeholder="Código:" value="{{$cidades->id ?? ''}}" required><br>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$cidades->nome ?? ''}}" required><br>
                <select class="form-control" name="estado" id="estado" required>  
                    @foreach($estados as $estado)
                        @if(isset($cidades))
                            @if($cidades->estado == $estado->id)                  
                                <option value="{{$estado->id}}" selected>{{$estado->nome}}</option>
                            @else
                                <option value="{{$estado->id}}">{{$estado->nome}}</option>
                            @endif
                        @else
                            <option value="{{$estado->id}}">{{$estado->nome}}</option>
                        @endif
                    @endforeach
                </select><br>
                <input class="btn btn-primary" type="submit" value="@if(isset($cidades)) Editar @else Cadastrar @endif">
            </form>
    </div>
@endsection