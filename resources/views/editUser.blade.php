@extends('adminlte::page')
<style>
    input{
        display: block;
    }
    .lb {
	width:200px;
	margin: 5px 0;
}
.input{
    width: 200px;
    margin-left: 10px;
    height: 30px;
}
.inp{
    margin-top: 12px;
    margin-left: 85px
}

</style>
@section('title', 'Desafio Web Laravel-Edit')

@section('content_header')
<h1>Editar Usuário</h1>
<form action="{{route('edi', ['user' =>$user->id])}}" method="post">
    @csrf
    @method('patch')
    <label for="" class="lb">Nome:</label>
    <input type="text" name="name" value="{{$user->name}}"  disabled class="input">

    <label for="" class="lb">Email:</label>
    <input type="text" name="email" value="{{$user->email}}" disabled class="input">

    <label for="" class="lb">Emprego: </label>
    <input type="text" name="emprego" required class="input">

    <label for="" class="lb">Senha:</label>
    <input type="text" name="password"  class="input">

    <input type='submit' value='Salvar Alterações' class="inp btn btn-success" data-toggle="modal" data-target="#salvar">

    @stop

    <div class='modal fade' id='salvar' tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <button type='button' class="close" data-dismiss="modal">
                            <span>&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                        <p>Cadastrado com Sucesso</p>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sair</button>

                </div>

            </div>
        </div>
    </div>
