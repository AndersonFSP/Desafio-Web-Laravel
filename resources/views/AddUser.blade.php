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
    margin-left: 80px
}

</style>
@section('title', 'Desafio Web Laravel-Register')

@section('content_header')
<h1>Cadastro</h1>
<form action="{{route('store')}}" method="post">
    @csrf

    <label for="" class="lb">Nome:</label>
    <input type="text" name="name" required  class="input">

    <label for="" class="lb">Email:</label>
    <input type="text" name="email" required class="input">

    <label for="" class="lb">Emprego: </label>
    <input type="text" name="emprego" required class="input">

    <label for="" class="lb">Senha:</label>
    <input type="text" name="password" required class="input">

    <input type='submit' value='Cadastrar usuário' class='inp btn btn-success' data-toggle="modal" data-target="#sucesso">

    @stop
    <div class='modal fade' id='sucesso' tabindex="-1" role="dialog">
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
